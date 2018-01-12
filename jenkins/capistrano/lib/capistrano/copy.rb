require 'zip'

Zip.setup do |c|
  c.unicode_names = true
  c.on_exists_proc = true
  c.continue_on_exists_proc = true
end

namespace :copy do
  task :check do
  end

  task :set_current_revision do
  end

  task create_release: 'release.zip' do |t|
    file = t.prerequisites.first
    on roles(:app) do
      execute :mkdir, '-p', fetch(:tmp_dir)
      upload! file, fetch(:tmp_dir)
      execute :unzip, '-o', "#{fetch(:tmp_dir)}/release.zip", '-d', release_path
    end
    File.delete file if File.exists?(file)
  end

  file 'release.zip' do |t|
    release_filename = File.join(Dir.pwd, t.name)

    Dir.chdir fetch(:copy_dir) do
      Zip::File.open(release_filename, Zip::File::CREATE) do |zipfile|
        files = FileList['**/*']
        files.exclude(*fetch(:copy_exclude)).each do |file|
          zipfile.add(file, file)
        end
        files = FileList['**/.htaccess']
        files.exclude(*fetch(:copy_exclude)).each do |file|
          zipfile.add(file, file)
        end
      end
    end
  end
end
