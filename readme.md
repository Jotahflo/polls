<!-- PROJECT LOGO -->
<br />
<p align="center">
  <a href="https://github.com/Jotahflo/polls">
    <img src="resources/assets/chart.png" alt="Logo" width="150" height="150">
  </a>

  <h3 align="center">Proyecto Polls</h3>

  <p align="center">
    A website of a small polls together with your reports
    <br /> 
    <a href="https://github.com/Jotahflo/polls"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="https://Jotahflo.github.io/polls">View Page</a>
    ·
    <a href="https://github.com/Jotahflo/polls/issues">Report Bug</a>
    ·
    <a href="https://github.com/Jotahflo/polls/issues">Request Feature</a>
  </p>
</p>

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->

## About The Project

[![Product Name Screen Shot][product-screenshot]](https://Jfloresvid.github.io/portfolio)

This project is a web page that allows you to enter data with a form and show them by graphics and tables.

### Built With

The major frameworks that use in this project are:

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)

<!-- GETTING STARTED -->

## Getting Started

To get a local copy up and running this project follow these simple example steps.

### Prerequisites

This is an list things you need to running the project and how to install them.

- install composer in linux (In windows, download and run [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe))

  ```sh
  php composer-setup.php --install-dir=bin --filename=composer
  ```

### Installation

1.  Clone the repo
    ```sh
    git clone https://github.com/Jotahflo/polls.git
    ```
2.  Install Composer packages

    ```sh
    composer install
    ```

3.  Start local server

4.  Create a database

    ```sql
      create database polls character set utf8mb4 collate utf8mb4_spanish_ci;
    ```

5.  Use a database

    ```sql
      use polls;
    ```

6.  Create tables and insert data in database

    ```sh
      php artisan migrate:fresh --seed
    ```

7.  Access to page in local server

<!-- LICENSE -->

## License

Distributed under the MIT License. See `LICENSE` for more information.

<!-- CONTACT -->

## Contact

Juan Flores - [LinkedIn](https://www.linkedin.com/in/jfloresvid) - j.floresvid@gmail.com

<!-- ACKNOWLEDGEMENTS -->

## Acknowledgements

- [Laravel Excel](https://laravel-excel.com/)
- [Chart.js](https://www.chartjs.org/)

[product-screenshot]: resources/assets/preview.png
