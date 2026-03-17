<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site Maintenance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        background-color: #f8f9fa;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        text-align: center;
      }
      .maintenance-box {
        background: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 90%;
      }
      h1 {
        color: #0d6efd;
        margin-bottom: 20px;
      }
      p {
        color: #6c757d;
      }
    </style>
  </head>
  <body>
    <div class="maintenance-box">
      <h1>We'll be right back!</h1>
      <p id="message">Our website is currently under maintenance.</p>
      <p id="time"></p>
      <p class="text-muted">Thank you for your patience.</p>
    </div>

    <script>
      // Dynamic message and time
      const message = "We are performing scheduled maintenance to improve our services.";
      document.getElementById('message').textContent = message;

      function updateTime() {
        const now = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit' };
        document.getElementById('time').textContent = 'Current time: ' + now.toLocaleString(undefined, options);
      }

      updateTime();
      setInterval(updateTime, 1000);
    </script>
  </body>
</html>
