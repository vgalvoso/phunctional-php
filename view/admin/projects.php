<div class="w-20 col center">
    <form class="w-100">
        <textarea name="projectName" id="" cols="30" rows="3"></textarea>
        <input type="text" class="pad" name="projectNumber" placeholder="Project Number" id="">
        <input type="text" class="pad" name="client" placeholder="Client" id="">
        <input type="text" class="pad" name="amount" placeholder="Amount" id="">
        <button class="bg-success" hx-post="addProject">Add</button>
        <button class="bg-info">Edit</button>
        <button class="bg-danger">Delete</button>
    </form>
</div>
<div class="w-80">
    <table class="bg-white w-100 tbl-clickable">
        <thead>
            <tr>
                <th>Project Number</th>
                <th>Project Name</th>
                <th>Amount</th>
                <th>Client</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody hx-get="projectsTable" hx-swap="innerHTML" hx-trigger="load">

        </tbody>
    </table>
</div>