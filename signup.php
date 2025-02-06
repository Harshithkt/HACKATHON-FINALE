<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "hack";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO userdata (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Webcrumbs Plugin</title>
    <style>
      @import url(https://fonts.googleapis.com/css2?family=Lato&display=swap);

      @import url(https://fonts.googleapis.com/css2?family=Open+Sans&display=swap);

      @import url(https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css);

      /*! tailwindcss v3.4.11 | MIT License | https://tailwindcss.com*/
      *,
      :after,
      :before {
        border: 0 solid #e5e7eb;
        box-sizing: border-box;
      }
      :after,
      :before {
        --tw-content: "";
      }
      :host,
      html {
        line-height: 1.5;
        -webkit-text-size-adjust: 100%;
        font-family: Open Sans, ui-sans-serif, system-ui, sans-serif,
          Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
        font-feature-settings: normal;
        font-variation-settings: normal;
        -moz-tab-size: 4;
        tab-size: 4;
        -webkit-tap-highlight-color: transparent;
      }
      body {
        line-height: inherit;
        margin: 0;
      }
      hr {
        border-top-width: 1px;
        color: inherit;
        height: 0;
      }
      abbr:where([title]) {
        text-decoration: underline dotted;
      }
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-size: inherit;
        font-weight: inherit;
      }
      a {
        color: inherit;
        text-decoration: inherit;
      }
      b,
      strong {
        font-weight: bolder;
      }
      code,
      kbd,
      pre,
      samp {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas,
          Liberation Mono, Courier New, monospace;
        font-feature-settings: normal;
        font-size: 1em;
        font-variation-settings: normal;
      }
      small {
        font-size: 80%;
      }
      sub,
      sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
      }
      sub {
        bottom: -0.25em;
      }
      sup {
        top: -0.5em;
      }
      table {
        border-collapse: collapse;
        border-color: inherit;
        text-indent: 0;
      }
      button,
      input,
      optgroup,
      select,
      textarea {
        color: inherit;
        font-family: inherit;
        font-feature-settings: inherit;
        font-size: 100%;
        font-variation-settings: inherit;
        font-weight: inherit;
        letter-spacing: inherit;
        line-height: inherit;
        margin: 0;
        padding: 0;
      }
      button,
      select {
        text-transform: none;
      }
      button,
      input:where([type="button"]),
      input:where([type="reset"]),
      input:where([type="submit"]) {
        -webkit-appearance: button;
        background-color: transparent;
        background-image: none;
      }
      :-moz-focusring {
        outline: auto;
      }
      :-moz-ui-invalid {
        box-shadow: none;
      }
      progress {
        vertical-align: baseline;
      }
      ::-webkit-inner-spin-button,
      ::-webkit-outer-spin-button {
        height: auto;
      }
      [type="search"] {
        -webkit-appearance: textfield;
        outline-offset: -2px;
      }
      ::-webkit-search-decoration {
        -webkit-appearance: none;
      }
      ::-webkit-file-upload-button {
        -webkit-appearance: button;
        font: inherit;
      }
      summary {
        display: list-item;
      }
      blockquote,
      dd,
      dl,
      figure,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6,
      hr,
      p,
      pre {
        margin: 0;
      }
      fieldset {
        margin: 0;
      }
      fieldset,
      legend {
        padding: 0;
      }
      menu,
      ol,
      ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }
      dialog {
        padding: 0;
      }
      textarea {
        resize: vertical;
      }
      input::placeholder,
      textarea::placeholder {
        color: #9ca3af;
        opacity: 1;
      }
      [role="button"],
      button {
        cursor: pointer;
      }
      :disabled {
        cursor: default;
      }
      audio,
      canvas,
      embed,
      iframe,
      img,
      object,
      svg,
      video {
        display: block;
        vertical-align: middle;
      }
      img,
      video {
        height: auto;
        max-width: 100%;
      }
      [hidden] {
        display: none;
      }
      *,
      :after,
      :before {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
        --tw-contain-size: ;
        --tw-contain-layout: ;
        --tw-contain-paint: ;
        --tw-contain-style: ;
      }
      ::backdrop {
        --tw-border-spacing-x: 0;
        --tw-border-spacing-y: 0;
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-gradient-from-position: ;
        --tw-gradient-via-position: ;
        --tw-gradient-to-position: ;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
        --tw-contain-size: ;
        --tw-contain-layout: ;
        --tw-contain-paint: ;
        --tw-contain-style: ;
      }
      #webcrumbs .absolute {
        position: absolute;
      }
      #webcrumbs .relative {
        position: relative;
      }
      #webcrumbs .inset-x-0 {
        left: 0;
        right: 0;
      }
      #webcrumbs .top-1\/2 {
        top: 50%;
      }
      #webcrumbs .my-4 {
        margin-bottom: 16px;
        margin-top: 16px;
      }
      #webcrumbs .mb-2 {
        margin-bottom: 8px;
      }
      #webcrumbs .mb-6 {
        margin-bottom: 24px;
      }
      #webcrumbs .mt-2 {
        margin-top: 8px;
      }
      #webcrumbs .mt-4 {
        margin-top: 16px;
      }
      #webcrumbs .flex {
        display: flex;
      }
      #webcrumbs .h-\[40px\] {
        height: 40px;
      }
      #webcrumbs .min-h-\[600px\] {
        min-height: 600px;
      }
      #webcrumbs .w-\[400px\] {
        width: 400px;
      }
      #webcrumbs .w-\[40px\] {
        width: 40px;
      }
      #webcrumbs .w-full {
        width: 100%;
      }
      #webcrumbs .-translate-y-1\/2 {
        --tw-translate-y: -50%;
      }
      #webcrumbs .-translate-y-1\/2,
      #webcrumbs .transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }
      #webcrumbs .flex-row {
        flex-direction: row;
      }
      #webcrumbs .flex-col {
        flex-direction: column;
      }
      #webcrumbs .items-center {
        align-items: center;
      }
      #webcrumbs .justify-center {
        justify-content: center;
      }
      #webcrumbs .justify-between {
        justify-content: space-between;
      }
      #webcrumbs .gap-2 {
        gap: 8px;
      }
      #webcrumbs .gap-4 {
        gap: 16px;
      }
      #webcrumbs .rounded-full {
        border-radius: 9999px;
      }
      #webcrumbs .rounded-lg {
        border-radius: 24px;
      }
      #webcrumbs .rounded-md {
        border-radius: 18px;
      }
      #webcrumbs .border {
        border-width: 1px;
      }
      #webcrumbs .border-neutral-300 {
        --tw-border-opacity: 1;
        border-color: rgb(202 202 202 / var(--tw-border-opacity));
      }
      #webcrumbs .bg-blue-400 {
        --tw-bg-opacity: 1;
        background-color: rgb(96 165 250 / var(--tw-bg-opacity));
      }
      #webcrumbs .bg-blue-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(37 99 235 / var(--tw-bg-opacity));
      }
      #webcrumbs .bg-primary {
        --tw-bg-opacity: 1;
        background-color: rgb(97 27 248 / var(--tw-bg-opacity));
      }
      #webcrumbs .bg-red-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(220 38 38 / var(--tw-bg-opacity));
      }
      #webcrumbs .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
      }
      #webcrumbs .p-2 {
        padding: 8px;
      }
      #webcrumbs .p-6 {
        padding: 24px;
      }
      #webcrumbs .px-4 {
        padding-left: 16px;
        padding-right: 16px;
      }
      #webcrumbs .py-3 {
        padding-bottom: 12px;
        padding-top: 12px;
      }
      #webcrumbs .text-center {
        text-align: center;
      }
      #webcrumbs .font-title {
        font-family: Lato, ui-sans-serif, system-ui, sans-serif,
          Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      }
      #webcrumbs .text-3xl {
        font-size: 30px;
        line-height: 36px;
      }
      #webcrumbs .text-base {
        font-size: 16px;
        line-height: 25.6px;
      }
      #webcrumbs .text-lg {
        font-size: 18px;
        line-height: 27px;
      }
      #webcrumbs .text-xs {
        font-size: 12px;
        line-height: 19.200000000000003px;
      }
      #webcrumbs .font-semibold {
        font-weight: 600;
      }
      #webcrumbs .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
      }
      #webcrumbs .shadow-lg {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
          0 4px 6px -4px rgba(0, 0, 0, 0.1);
        --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),
          0 4px 6px -4px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
          var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
      }
      #webcrumbs .transition-all {
        transition-duration: 0.15s;
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      }
      #webcrumbs {
        font-family: Open Sans !important;
        font-size: 16px !important;
      }
      #webcrumbs .hover\:scale-110:hover {
        --tw-scale-x: 1.1;
        --tw-scale-y: 1.1;
      }
      #webcrumbs .hover\:scale-110:hover,
      #webcrumbs .hover\:scale-\[1\.02\]:hover {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y))
          rotate(var(--tw-rotate)) skewX(var(--tw-skew-x))
          skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x))
          scaleY(var(--tw-scale-y));
      }
      #webcrumbs .hover\:scale-\[1\.02\]:hover {
        --tw-scale-x: 1.02;
        --tw-scale-y: 1.02;
      }
      #webcrumbs .hover\:bg-blue-500:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(59 130 246 / var(--tw-bg-opacity));
      }
      #webcrumbs .hover\:bg-blue-700:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(29 78 216 / var(--tw-bg-opacity));
      }
      #webcrumbs .hover\:bg-primary\/90:hover {
        background-color: rgba(97, 27, 248, 0.9);
      }
      #webcrumbs .hover\:bg-red-700:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(185 28 28 / var(--tw-bg-opacity));
      }
      #webcrumbs .focus\:border-primary:focus {
        --tw-border-opacity: 1;
        border-color: rgb(97 27 248 / var(--tw-border-opacity));
      }
      #webcrumbs .focus\:ring-2:focus {
        --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0
          var(--tw-ring-offset-width) var(--tw-ring-offset-color);
        --tw-ring-shadow: var(--tw-ring-inset) 0 0 0
          calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
        box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow),
          var(--tw-shadow, 0 0 #0000);
      }
      #webcrumbs .focus\:ring-primary\/20:focus {
        --tw-ring-color: rgba(97, 27, 248, 0.2);
      }

      body {
        line-height: inherit;
        padding: 24px;
        display: flex;
        flex-direction: column;
        min-width: 100vw;
        min-height: 100vh;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #ffffff, #d4d4d4);
      }
    </style>
  </head>
  <body>
    <div id="webcrumbs">
      <div class="w-[400px] min-h-[600px] bg-white rounded-lg shadow-lg p-6">
        <h1 class="font-title text-3xl text-center mb-2">Signup</h1>
        <!-- <p class="text-center text-lg mb-6">
          Create your account to access exclusive content and more.
        </p> -->
        <form class="flex flex-col gap-4">
          <div class="flex flex-col gap-2">
            <label for="name" class="font-semibold">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              class="border border-neutral-300 rounded-md p-2 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
              placeholder="Enter your name"
            />
          </div>
          <!-- <div class="flex flex-col gap-2">
            <label for="mobile" class="font-semibold">Mobile Number</label>
            <input
              type="tel"
              id="mobile"
              class="border border-neutral-300 rounded-md p-2 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
              placeholder="Enter your mobile number"
            />
          </div> -->
          <div class="flex flex-col gap-2">
            <label for="email" class="font-semibold">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="border border-neutral-300 rounded-md p-2 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
              placeholder="Enter your email"
            />
          </div>
          <div class="flex flex-col gap-2">
            <label for="password" class="font-semibold">Password</label>
            <input
              type="password"
              id="password"
              name="password"
              class="border border-neutral-300 rounded-md p-2 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
              placeholder="Create a password"
            />
          </div>
          <div class="flex flex-col gap-2">
            <label for="confirm-password" class="font-semibold"
              >Confirm Password</label
            >
            <input
              type="password"
              id="confirm-password"
              class="border border-neutral-300 rounded-md p-2 focus:ring-2 focus:ring-primary/20 focus:border-primary transition-all"
              placeholder="Confirm your password"
            />
          </div>
          <div class="mt-4">
            <button
              class="w-full bg-primary text-white text-base rounded-md py-3 hover:bg-primary/90 transform hover:scale-[1.02] transition-all"
            >
              Signup Now
            </button>
          </div>
          <p class="text-xs text-center mt-2">
            We respect your privacy. Your information will never be shared with
            third parties.
          </p>
        </form>
        <!-- <div class="relative my-4 text-center">
          <span
            class="absolute inset-x-0 top-1/2 -translate-y-1/2 bg-white px-4"
            >or</span
          >
          <hr class="border-neutral-300" />
        </div>
        <div class="flex gap-4 justify-center">
          <button
            class="bg-blue-600 w-[40px] h-[40px] rounded-full flex items-center justify-center hover:bg-blue-700 transform hover:scale-110 transition-all text-white"
          >
            <i class="fa-brands fa-facebook text-lg"></i>
          </button>
          <button
            class="bg-red-600 w-[40px] h-[40px] rounded-full flex items-center justify-center hover:bg-red-700 transform hover:scale-110 transition-all text-white"
          >
            <i class="fa-brands fa-google text-lg"></i>
          </button>
          <button
            class="bg-blue-400 w-[40px] h-[40px] rounded-full flex items-center justify-center hover:bg-blue-500 transform hover:scale-110 transition-all text-white"
          >
            <i class="fa-brands fa-twitter text-lg"></i>
          </button>
        </div> -->
      </div>
    </div>
  </body>
</html>
