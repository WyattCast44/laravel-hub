![](logo.png)

# Laravel Hub

Laravel hub is your home for laravel packages, template, tools and more.

# Installing Locally

#### Clone the repo

```bash
git clone https://github.com/WyattCast44/palette-hub.git hub
```

#### Move into project

```bash
cd hub
```

#### Copy the env file

Make sure you set your local credentials in your `.env` file.

```bash
cp .env.example .env
```

#### Install Composer dependencies

```bash
composer install
```

#### Install NPM dependencies (Optional)

```bash
npm install
```

#### Create OAuth App

- [Create GitHub OAuth App](https://github.com/settings/applications/new)
- URL:
    - `Authorization callback URL = http://hub.test/login/callback`
- Add the client ID and secret to `.env` file

```bash
GITHUB_CLIENT_ID=your-id
GITHUB_CLIENT_SECRET=your-secret
```

#### Migrate Database

```bash
php artisan migrate --seed
```