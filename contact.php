<section class="my-5">
    <div class="py-3">
        <h3 class="text-center">Contact Us</h3>
    </div> 
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile No</label>
                <input type="phone" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" placeholder="Send your requirments..."
                          name="message"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
