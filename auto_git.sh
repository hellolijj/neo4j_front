# 插入更新记录
cd $1

echo - $(date) 自动更新 by auto_git.sh   >> CHANGELOG.md


# 自动提交代码
git add *
git commit -m "auto refresh"
git push
