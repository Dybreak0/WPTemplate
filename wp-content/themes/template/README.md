# Get Started

[![GitHub](https://img.shields.io/wordpress/v/akismet.svg?colorA=D14543&colorB=21759B&maxAge=2592000&style=flat&label=WordPress)](https://github.com/ahmadawais/WPGulp/)
![Version](https://img.shields.io/badge/version-v1.0.0-blue.svg) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](#) ![Maintainer](https://img.shields.io/badge/Maintainer-Jeremy%20James%20Sangutan-green.svg)

This is a WordPress Theme Template with Gulp. Clone `master` and start your project.

##### Table of Contents

- [:pushpin: Prerequisites](#Prerequisites)
- [:rocket: Installation](#Installation)
- [:computer: Usage](#Usage)
- [:memo: Contribution](#Contribution)
- [:paperclip: Additional Info](#Additional)

  - [Breakpoints](#Breakpoints)
  - [Maxwidth](#Maxwidth)
  - [Summary for FLOCSS](#FLOCSS)
  - [BEM brief explanation in SCSS](#BEM)

- [:mailbox: Credits](#Credits)
- [:two_hearts: Acknowledgements and References](#Acknowledgements)
- [:handshake: Contribute](#Contribute)

## <a name='Prerequisites'></a> :pushpin: Prerequisites

Before you begin, ensure you have met the following requirements:

- You have a `Windows 10` machine.
- Server `xampp` or `laragon`
  > Preferably [**Laragon**](https://laragon.org/download)
- Node installed 
  > Install node.js latest here [**Node**](https://nodejs.org/en/)
## <a name='Installing'></a> :rocket: Installing WordPress Template

<details>
 <summary><strong><code>STEP #0</code></strong> — Don't have <code>Node.js</code> + <code>npm</code> installed? Read this. (CLICK TO EXPAND!)</summary>

In case you are an absolute beginner to the world of `Node.js`, JavaScript, and `npm` packages — all you need to do is go to the Node's site [download + install](https://nodejs.org/en/download/) Node on your system. This will install both `Node.js` and `npm`, i.e., node package manager — the command line interface of Node.js.

You can verify the install by opening your terminal app and typing...

```sh
node -v
# Results into v9.11.2 — make sure you have Node >= 8 installed.

npm -v
# Results into 6.2.0 — make sure you have npm >= 5.3 installed.
```

</details>

### → `STEP #1` — Download WPTemplate folder

In the terminal go to the root folder of your laragon  "src/laragon/www" and bash the code below:
**Windows**:
```sh
 git clone https://github.com/Dybreak0/WPTemplate.git
```
![alt text](https://github.com/[username]/[reponame]/blob/[branch]/image.jpg?raw=true)

_It'll take a couple of minutes to install._

### → `STEP #3` — WordPress Installation
To install WordPress template in your local machine, follow the steps below.
1. Open Laragon and Run the server.
2. Create a database for wordpress installation.
3. Go to url and write "WPTemplate.test"
4. Wordpress installation will pop-up, follow the steps.

Once the installation is successful, proceed to next step.

### → `STEP #4` — Usage of WordPress template

To begin the development, follow this steps listed below:

1. go to **`src/`** folder
2. run **`npm install`**
3. after the dependencies installed, run **`gulp build && gulp watch`**
##### Code Block:

```sh
cd src
npm install
gulp build
gulp watch
```
When you run this scripts it will generate a bundled file to `public/` folder.

:warning: You must only edit in `src/` folder to avoid confusion.
:Put all your assets in "src/img/pc" for PC version, "src/img/sp" for mobile.

## <a name='Additional'></a> :paperclip: Additional Info

Additional information about Static template

- `src/` is the main source code
- `public/` is the release folder of compressed file from `src/`.
  - `public/minified/**/css` this refers to minified version of CSS
  - `public/tinified/**/img` this refers the tinified/compressed image
  - `public/uglified/` this refers a compressed javascript
- ### <a name='Errors'></a>Errors

  If you encounter this problem `bash gulp command not found` consider this running this script in cmd

  ```sh
  npm install --global gulp-cli
  ```

  Installing the gulp in global scope.


- ### <a name='FLOCSS'></a> Summary for FLOCSS

  Link for [FLOCSS Summarry](https://titanwolf.org/Network/Articles/Article?AID=8651e5ed-bb84-446d-82a9-3d811109c133#gsc.tab=0)

  - **l-** as prefix of layout
  - **c-** as prefix of component
  - **p-** as prefix of project
  - **u-** as prefix of Utility

    - #### FLOCSS ARCHITECTURE:

    ```
    - css/
    - foundation
    - layout
    - object
        - component
        - project
        - Utility
    ```

- ### <a name='BEM'></a> BEM brief explanation in SCSS

  ##### HTML :

  ```HTML
  //HTML Implementation


  <div class="card">
      <h1 class="card__title">
          Some Title
      </h1>
      <p class="card__text">
          Text with variation/modifiers
      </p>
      <p class="card__text--primary">
          Text with primary color or something.
      </p>
      <p class="card__text--secondary">
          Text with secondary color or something.
      </p>
      <a href="#" class="card__button">
          Click Here
      </a>
  </div>

  ```

  ##### SCSS:

  ```scss
  //SASS Implementation
  .card {
    //<---------------BLOCK
    &__title {
      //<---------------ELEMENT
    }
    &__text {
      //<---------------ELEMENT
      &--primary {
        //<---------------MODIFIERS
      }
      &--secondary {
        //<---------------MODIFIERS
      }
    }
    &__button {
      //<---------------ELEMENT
    }
  }
  ```
## <a name='Acknowledgements'></a>:two_hearts: Acknowledgements and References

- WPTemplate project is from static template modified to be used in WordPress local.

## <a name='Contribute'></a> :handshake: Contribute

Contributions, issues and feature requests are welcome!

- Issue Tracker: https://github.com/WPTemplate/issues
- Source Code: https://github.com/WPTemplate

---

Copyright © 2020 [HiPE Inc. ltd.](https://bpoc.co.jp/) All rights reserved

