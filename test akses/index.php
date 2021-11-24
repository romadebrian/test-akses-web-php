<?php
include "akses.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="sidebars.css" rel="stylesheet" />

  <title>Document</title>
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
    <symbol id="bootstrap" viewBox="0 0 118 94">
      <!--<use xlink:href="#bootstrap" /> -->
      <title>Bootstrap</title>
      <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
    </symbol>
  </svg>

  <main>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px">
      <a href="/" class="
            d-flex
            align-items-center
            mb-3 mb-md-0
            me-md-auto
            text-white text-decoration-none
          ">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4">Sidebar</span>
      </a>
      <hr />
      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a href="#" class="nav-link active" aria-current="page">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#home" />
            </svg>
            Home
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#speedometer2" />
            </svg>
            Dashboard
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#table" />
            </svg>
            Orders
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#grid" />
            </svg>
            Products
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
            <svg class="bi me-2" width="16" height="16">
              <use xlink:href="#people-circle" />
            </svg>
            Customers
          </a>
        </li>
      </ul>
      <hr />
      <div class="dropdown">
        <a href="#" class="
              d-flex
              align-items-center
              text-white text-decoration-none
              dropdown-toggle
            " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2" />
          <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
        </ul>
      </div>
    </div>

    <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px">
      <a href="/" class="
            d-flex
            align-items-center
            flex-shrink-0
            p-3
            link-dark
            text-decoration-none
            border-bottom
          ">
        <svg class="bi me-2" width="30" height="24">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-5 fw-semibold">List group</span>
      </a>
      <div class="list-group list-group-flush border-bottom scrollarea">
        <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small>Wed</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Tues</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Mon</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>

        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Wed</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Tues</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Mon</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Wed</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Tues</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Mon</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Wed</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Tues</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
          <div class="d-flex w-100 align-items-center justify-content-between">
            <strong class="mb-1">List group item heading</strong>
            <small class="text-muted">Mon</small>
          </div>
          <div class="col-10 mb-1 small">
            Some placeholder content in a paragraph below the heading and
            date.
          </div>
        </a>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="sidebars.js"></script>
</body>

</html>