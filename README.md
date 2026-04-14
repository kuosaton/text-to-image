# text-to-image

A simple tool for converting a text input to a PNG image with user-chosen background and text colors. Usage idea: display your email address on a website while obfuscating it
from pesky crawlers and bots!

## Credits

Based on the [Email to Image](https://www.daftlogic.com/projects-email-to-image.htm) tool and PHP code by DaftLogic. Extended with Docker deployment, live
image preview, custom color inputs, and general text input support.

## Prerequisites

- [Docker Compose](https://docs.docker.com/compose/install/)

## Usage

Clone this repository and run `docker compose up` in the repository root. When ready, you can use the tool at [http://localhost:8080/](http://localhost:8080/) on your browser.
