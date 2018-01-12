node {
    stage '初期設定・ブランチ名取得'
    def jobname = 'Waikiki-Development-Deploy-Pipeline'
    echo "branch=$GITHUB_BRANCH_PARAM"

    stage 'ブランチ最新化'
    sh "cd ../${jobname}@script && git pull origin $GITHUB_BRANCH_PARAM"

    stage '終了作業・GITクリア'
    sh "cd ../${jobname}@script && git clean -fdx"
    echo "finish"
}

