<div class="w-20 col center">
    <form class="w-100">
        <input type="text" class="pad" name="username" placeholder="Username" id="">
        <input type="password" class="pad" name="password" placeholder="Password" id="">
        <input type="text" class="pad" name="firstname" placeholder="First Name" id="">
        <input type="text" class="pad" name="middlename" placeholder="Middle Name" id="">
        <input type="text" class="pad" name="lastname" placeholder="Last Name" id="">
        <select name="role" class="pad" id="">
            <option value="">Select Role</option>
            <option value="Admin">Admin</option>
        </select>
        <button class="bg-success" hx-post="createAccount" hx-target="#users_tbl">Add</button>
        <button class="bg-info">Edit</button>
        <button class="bg-danger">Delete</button>
    </form>
</div>
<div class="w-80">
    <table class="bg-white w-100 tbl-clickable">
        <thead>
            <tr>
                <th>Username</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Lastname</th>
                <th>Role</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="users_tbl" hx-get="usersTable" hx-swap="innerHTML" hx-trigger="load">

        </tbody>
    </table>
</div>