# Ping - example challenge

## Details

- difficulty: Easy
- category: Web
- domain:
  - https://chall1.example.org
- flags: victf{0123456789ABCDEF}

## Description

John made a simple php web app for pinging hosts in their network.

## Deployment

For the deployment we just need to deploy the docker container. The players
should not get any additional files.

```bash
docker compose build; docker compose up -d
```

## Solution / Write up

The web app allows to chain linux bash commands with the `;` character.

```bash
1.1.1.1; cat /flag.txt
```
