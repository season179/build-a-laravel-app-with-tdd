<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Project</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.min.css" integrity="sha512-byErQdWdTqREz6DLAA9pCnLbdoGGhXfU6gm1c8bkf7F51JVmUBlayGe2A31VpXWQP+eiJ3ilTAZHCR3vmMyybA==" crossorigin="anonymous" />
</head>
<body>

  <form method="POST" action="/projects" class="container" style="padding-top: 40px">
    @csrf
    
    <h1 class="heading is-1">Create a Project</h1>

    <div class="field">
      <label for="title" class="label">Title</label>

      <div class="control">
        <input type="text" class="input" name="title">
      </div>
    </div>

    <div class="field">
      <label for="description" class="label">Description</label>

      <div class="control">
        <textarea name="description" cols="30" rows="10" class="textarea"></textarea>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link">Create Project</button>
      </div>
    </div>
  </form>
</body>
</html>