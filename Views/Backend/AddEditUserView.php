<?php 
    //ket thua layout1.php de load vao day
    $this->fileLayout = "Views/Backend/Layout1.php";
 ?> 
<div class="col-md-12">  
    <div class="panel panel-primary">
        <div class="panel-heading">Add edit user</div>
        <div class="panel-body">
        <form method="post" action="<?php echo $formAction; ?>">
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Name</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->fullname)?$record->fullname:''; ?>" name="name" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Email</div>
                <div class="col-md-10">
                    <input type="email" <?php if(isset($record->email)): ?> disabled <?php endif; ?> value="<?php echo isset($record->email)?$record->email:''; ?>" name="email" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Password</div>
                <div class="col-md-10">
                    <input type="password" <?php if(isset($record->email)): ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else: ?> required <?php endif; ?> name="password" class="form-control">
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Phone</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->phone)?$record->phone:''; ?>" name="phone" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Address</div>
                <div class="col-md-10">
                    <input type="text" value="<?php echo isset($record->address)?$record->address:''; ?>" name="address" class="form-control" required>
                </div>
            </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2">Role</div>
                <div class="col-md-10">
                    <select name="role">
                        <?php
                            $conn = Connection::getInstance();
                            $stmt = $conn->prepare("select role from tbl_account group by role");
                            $stmt->execute();
                            while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo "<option value=".$row['role'].">".$row['role']."</option>";
                            }
                        ?>
                    </select><br>
                </div>
                </div>
            <!-- end rows -->
            <!-- rows -->
            <div class="row" style="margin-top:5px;">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                    <input type="submit" value="Process" class="btn btn-primary">
                </div>
            </div>
            <!-- end rows -->
        </form>
        </div>
    </div>
</div>