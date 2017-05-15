<table class="table table-hover">
    <thead>
        <tr>
            <th>Mã số</th>
            <th>Họ Tên</th>
            <th>Ngày sinh</th>
            <th>Email</th>
            
            <th>Phòng </th>
            <th>Nơi làm việc</th>
            <th>Lương</th>
            <th>Mã số thuế</th>
            <th>Chức vụ</th>
            <th>Action</th>

    </thead>
    <tbody>
        <tr ng-repeat="n in NV|filter:txtSearch">
            <td>1</td>
            <td>nguyen van a</td>
            <td>04/06/1996</td>
            <td>aasasdasdasdasdad@a.com</td>
            
            <td>ke toan</td>
            <td>TP HỒ CHÍ Minh</td>
            <td>50000</td>
            <td>ms1001</td>
            <td>truong phong</td>
            <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myEdit">Edit</button>
                
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>nguyen van a</td>
            <td>04/06/1996</td>
            <td>aasasdasdasdasdad@a.com</td>
            
            <td>ke toan</td>
            <td>TP HỒ CHÍ Minh</td>
            <td>500000</td>
            <td>ms1001</td>
            <td>truong phong</td>
            <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myEdit">Edit</button>
                
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
<<<<<<< HEAD
         <tr>
=======
        <tr>
>>>>>>> refs/remotes/origin/loi
            <td>1</td>
            <td>nguyen van a</td>
            <td>04/06/1996</td>
            <td>aasasdasdasdasdad@a.com</td>
            
            <td>ke toan</td>
            <td>TP HỒ CHÍ Minh</td>
<<<<<<< HEAD
            <td>500000</td>
            <td>ms1001</td>
            <td>truong phong</td>
            <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myEdit">Edit</button>
                
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
         <tr>
            <td>1</td>
            <td>nguyen van a</td>
            <td>04/06/1996</td>
            <td>aasasdasdasdasdad@a.com</td>
            
            <td>ke toan</td>
            <td>TP HỒ CHÍ Minh</td>
            <td>500000</td>
=======
            <td>50000</td>
>>>>>>> refs/remotes/origin/loi
            <td>ms1001</td>
            <td>truong phong</td>
            <td>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myEdit">Edit</button>
                
                <button class="btn btn-danger">Delete</button>
            </td>
        </tr>
         
    </tbody>
</table>

<!-- Modal Edit -->
<div id="myEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

