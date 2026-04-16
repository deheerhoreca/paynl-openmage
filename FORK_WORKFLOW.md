# Fork Workflow (Short)

## 1) Making Changes

- Start from latest upstream and branch off `master`: `git fetch upstream origin && git switch master && git rebase upstream/master && git switch -c work/<topic>`
- Make changes, then commit only intended hunks: `git add -p && git commit -m "<message>"`
- Fast-forward into `master` and keep history compact: `git switch master && git merge --ff-only work/<topic> && git rebase -i upstream/master` (squash/fixup to minimal commits)
- Push rewritten history safely: `git push --force-with-lease origin master`

## 2) Syncing Upstream

- Never merge upstream into `master`; always rebase: `git fetch upstream origin && git switch master && git rebase upstream/master`
- If conflicts happen, resolve and continue: `git add <files> && git rebase --continue`
- Verify branch is clean/minimal: `git rev-list --count upstream/master..master` and `git rev-list --count master..upstream/master`
- Publish sync: `git push --force-with-lease origin master`
