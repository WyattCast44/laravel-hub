# Github Webhooks

-   https://developer.github.com/v3/repos/hooks/#pubsubhubbub

```bash
curl -u "user" -i \
  https://api.github.com/hub \
  -F "hub.mode=subscribe" \
  -F "hub.topic=https://github.com/:owner/:repo/events/push" \
  -F "hub.callback=http://postbin.org/123"
```

# GitHub Repo Response

```json
{
    "id": 168786635,
    "node_id": "MDEwOlJlcG9zaXRvcnkxNjg3ODY2MzU=",
    "name": "usafcloud",
    "full_name": "usaf-cloud/usafcloud",
    "private": false,
    "owner": {},
    "html_url": "https://github.com/usaf-cloud/usafcloud",
    "description": "USAF.Cloud is a SSO platform for current and future tools/platforms for USAF members",
    "fork": false,
    "url": "https://api.github.com/repos/usaf-cloud/usafcloud",
    "forks_url": "https://api.github.com/repos/usaf-cloud/usafcloud/forks",
    "keys_url": "https://api.github.com/repos/usaf-cloud/usafcloud/keys{/key_id}",
    "collaborators_url": "https://api.github.com/repos/usaf-cloud/usafcloud/collaborators{/collaborator}",
    "teams_url": "https://api.github.com/repos/usaf-cloud/usafcloud/teams",
    "hooks_url": "https://api.github.com/repos/usaf-cloud/usafcloud/hooks",
    "issue_events_url": "https://api.github.com/repos/usaf-cloud/usafcloud/issues/events{/number}",
    "events_url": "https://api.github.com/repos/usaf-cloud/usafcloud/events",
    "assignees_url": "https://api.github.com/repos/usaf-cloud/usafcloud/assignees{/user}",
    "branches_url": "https://api.github.com/repos/usaf-cloud/usafcloud/branches{/branch}",
    "tags_url": "https://api.github.com/repos/usaf-cloud/usafcloud/tags",
    "blobs_url": "https://api.github.com/repos/usaf-cloud/usafcloud/git/blobs{/sha}",
    "git_tags_url": "https://api.github.com/repos/usaf-cloud/usafcloud/git/tags{/sha}",
    "git_refs_url": "https://api.github.com/repos/usaf-cloud/usafcloud/git/refs{/sha}",
    "trees_url": "https://api.github.com/repos/usaf-cloud/usafcloud/git/trees{/sha}",
    "statuses_url": "https://api.github.com/repos/usaf-cloud/usafcloud/statuses/{sha}",
    "languages_url": "https://api.github.com/repos/usaf-cloud/usafcloud/languages",
    "stargazers_url": "https://api.github.com/repos/usaf-cloud/usafcloud/stargazers",
    "contributors_url": "https://api.github.com/repos/usaf-cloud/usafcloud/contributors",
    "subscribers_url": "https://api.github.com/repos/usaf-cloud/usafcloud/subscribers",
    "subscription_url": "https://api.github.com/repos/usaf-cloud/usafcloud/subscription",
    "commits_url": "https://api.github.com/repos/usaf-cloud/usafcloud/commits{/sha}",
    "git_commits_url": "https://api.github.com/repos/usaf-cloud/usafcloud/git/commits{/sha}",
    "comments_url": "https://api.github.com/repos/usaf-cloud/usafcloud/comments{/number}",
    "issue_comment_url": "https://api.github.com/repos/usaf-cloud/usafcloud/issues/comments{/number}",
    "contents_url": "https://api.github.com/repos/usaf-cloud/usafcloud/contents/{+path}",
    "compare_url": "https://api.github.com/repos/usaf-cloud/usafcloud/compare/{base}...{head}",
    "merges_url": "https://api.github.com/repos/usaf-cloud/usafcloud/merges",
    "archive_url": "https://api.github.com/repos/usaf-cloud/usafcloud/{archive_format}{/ref}",
    "downloads_url": "https://api.github.com/repos/usaf-cloud/usafcloud/downloads",
    "issues_url": "https://api.github.com/repos/usaf-cloud/usafcloud/issues{/number}",
    "pulls_url": "https://api.github.com/repos/usaf-cloud/usafcloud/pulls{/number}",
    "milestones_url": "https://api.github.com/repos/usaf-cloud/usafcloud/milestones{/number}",
    "notifications_url": "https://api.github.com/repos/usaf-cloud/usafcloud/notifications{?since,all,participating}",
    "labels_url": "https://api.github.com/repos/usaf-cloud/usafcloud/labels{/name}",
    "releases_url": "https://api.github.com/repos/usaf-cloud/usafcloud/releases{/id}",
    "deployments_url": "https://api.github.com/repos/usaf-cloud/usafcloud/deployments",
    "created_at": "2019-02-02T02:41:15Z",
    "updated_at": "2019-07-11T02:14:08Z",
    "pushed_at": "2019-12-03T19:32:42Z",
    "git_url": "git://github.com/usaf-cloud/usafcloud.git",
    "ssh_url": "git@github.com:usaf-cloud/usafcloud.git",
    "clone_url": "https://github.com/usaf-cloud/usafcloud.git",
    "svn_url": "https://github.com/usaf-cloud/usafcloud",
    "homepage": "https://usaf.cloud",
    "size": 4092,
    "stargazers_count": 0,
    "watchers_count": 0,
    "language": "PHP",
    "has_issues": true,
    "has_projects": true,
    "has_downloads": true,
    "has_wiki": true,
    "has_pages": false,
    "forks_count": 0,
    "mirror_url": null,
    "archived": false,
    "disabled": false,
    "open_issues_count": 3,
    "license": null,
    "forks": 0,
    "open_issues": 3,
    "watchers": 0,
    "default_branch": "master"
}
```