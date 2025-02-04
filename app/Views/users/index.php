<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">
    <div class="container mx-auto max-w-2xl">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <form method="POST" class="mb-4">
                <input type="hidden" name="id" id="user-id">
                <input type="hidden" name="action" id="form-action" value="create">

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Name
                    </label>
                    <input type="text" name="name" id="name"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
                        placeholder="Enter name" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input type="email" name="email" id="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700"
                        placeholder="Enter email" required>
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" id="submit-btn"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Add User
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-white shadow-md rounded">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Created At</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($users as $user): ?>
                        <tr class="border-b">
                            <td class="px-4 py-2"><?php echo htmlspecialchars($user['id']); ?></td>
                            <td class="px-4 py-2"><?php echo htmlspecialchars($user['name']); ?></td>
                            <td class="px-4 py-2"><?php echo htmlspecialchars($user['email']); ?></td>
                            <td class="px-4 py-2"><?php echo htmlspecialchars($user['created_at']); ?></td>
                            <td class="px-4 py-2">
                                <a href="/users/edit/<?= $user['id'] ?>" class="text-blue-500 hover:text-blue-700 mr-2">Edit</a>
                                <form action="/users/delete/<?= $user['id'] ?>" method="POST" style="display: inline;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; ?>




                </tbody>
            </table>
        </div>
    </div>


</body>

</html>