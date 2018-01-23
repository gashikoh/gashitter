# config valid only for current version of Capistrano
lock '3.10.1'

set :application, 'intern'
set :repo_url, 'git@github.com:ozvit/web.git'

# set branch
set :branch, :'master'

# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
# set :deploy_to, '/var/www/my_app_name'
set :deploy_to, '/home/deploy/web_git'

# Default value for :scm is :git
set :scm, :git
#set :scm, :copy
#set :copy_dir, './'

# Default value for :format is :airbrussh.
# set :format, :airbrussh

# You can configure the Airbrussh format using :format_options.
# These are the defaults.
# set :format_options, command_output: true, log_file: 'log/capistrano.log', color: :auto, truncate: :auto

# Default value for :pty is false
set :pty, true

set :shell, '/bin/bash -l'

# Default value for :linked_files is []
# append :linked_files, 'config/database.yml', 'config/secrets.yml'

# Default value for linked_dirs is []
# append :linked_dirs, 'log', 'tmp/pids', 'tmp/cache', 'tmp/sockets', 'public/system'

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for keep_releases is 5
set :keep_releases, 5

task :grant do
  on roles(:app) do
    execute :chmod, "775 -R /home/deploy/web_git/current"
  end
end

task :rsync do
  on roles(:app) do
    execute "rsync -r -l -p -g -o -D -v --no-g --delete /home/deploy/web_git/current/web /var/www/web/web"
  end
end

namespace :deploy do

  desc 'Localize application'
  task :localize do
    on roles(:app), in: :sequence, wait: 5 do
    end
  end

  before :publishing, :localize

  desc 'Activate application'
  task :activate do
    on roles(:app), in: :sequence, wait: 5 do
      invoke "grant"
      invoke "rsync"
    end
  end

  after :publishing, :activate

end
