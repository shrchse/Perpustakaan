<!DOCTYPE html>
<html lang="en">

<head>
    <body>
        <h1><u>This is Member List</u></h1>

    @foreach ($daftar_member as $member)
      <h3>No Member: {{$member->no_member}}</h3>
      <h3>Nama     : {{$member->name}}</h3>
    @endforeach

</body>

</html>