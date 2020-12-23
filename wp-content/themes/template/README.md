# Get Started

[![GitHub](https://img.shields.io/wordpress/v/akismet.svg?colorA=D14543&colorB=21759B&maxAge=2592000&style=flat&label=WordPress)](https://github.com/ahmadawais/WPGulp/)
![Version](https://img.shields.io/badge/version-v1.0.0-blue.svg) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](#) ![Maintainer](https://img.shields.io/badge/Maintainer-Jeremy%20James%20Sangutan-green.svg)

This is a WordPress Theme Template with Gulp. Clone `master` and start your project.

##### Table of Contents

- [:pushpin: Prerequisites](#Prerequisites)
- [:rocket: Installing Nanashoku](#Installing)
- [:computer: Usage of Nanashoku](#Usage)
- [:memo: Contributing to Nanashoku](#Contributing)
- [:paperclip: Additional Info](#Additional)

  - [Breakpoints](#Breakpoints)
  - [Maxwidth](#Maxwidth)
  - [Summary for FLOCSS](#FLOCSS)
  - [BEM brief explanation in SCSS](#BEM)

- [:mailbox: Credits](#Credits)
  - [Division of Task](#Division)
- [:two_hearts: Acknowledgements and References](#Acknowledgements)
- [:handshake: Contribute](#Contribute)

## <a name='Prerequisites'></a> :pushpin: Prerequisites

Before you begin, ensure you have met the following requirements:

- You have a `Windows 10` machine.
- Server `xampp` or `laragon`
  > Preferably [**Laragon**](https://laragon.org/download)
- Node installed  
  > Install node.js here [**Node**](https://nodejs.org/en/)
## <a name='Installing'></a> :rocket: Installing WPTemplate

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

- Rightcore project is from static website converted Wordpress with the help of Greg.

## <a name='Contribute'></a> :handshake: Contribute

Contributions, issues and feature requests are welcome!

- Issue Tracker: https://github.com/WPTemplate/Rightcore/issues
- Source Code: https://github.com/WPTemplate/Rightcore

---

Copyright © 2020 [HiPE Inc. ltd.](https://bpoc.co.jp/) All rights reserved

