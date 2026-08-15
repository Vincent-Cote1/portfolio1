# portfolio1

Base setup to use this repository as a GitHub-powered updater for a cPanel-hosted site.

## cPanel deployment base

This project includes a `.cpanel.yml` file so cPanel can deploy the latest pushed code.

### Setup
1. In cPanel, open **Git Version Control** and create/link a repository to this GitHub repo.
2. Set the repository path and branch you want to deploy (usually `main`).
3. Update the `DEPLOYPATH` value in `.cpanel.yml` to your real server path (for example `/home/<cpanel-user>/public_html/`).
4. In cPanel, enable **Pull or Deploy** so each pull uses the deployment tasks.

After that, new GitHub pushes can be pulled/deployed from cPanel to update the server.