<html>
<head>
    <title><?php echo $profile; ?></title>
</head>
<body>
    <h1>Daftar User</h1>
    <table border="1">
        <thead>
        <tr>
            
            <th>Username</th>
            <th>Password</th>
          
        </tr>
    </thead>
    <tbody>
            <?php foreach($profile as $user):?>
                <tr>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['password']; ?></td>
        </tr>
           <?php 
           endforeach; 
           ?>

    </tbody>
    </table>
</body>
</html>
