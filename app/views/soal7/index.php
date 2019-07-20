<div class="container">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
    <button type="button" class="btn btn-primary pl-3 mb-3" id="tambahData" data-toggle="modal" data-target="#tambahModal">
      Tambah Data
    </button>
    <div class="col-lg-4">
      <table class="table table-hover" id="mydata">
        <thead>
          <tr>
            <th scope="col">Nama</th>
            <th scope="col">Work</th>
            <th scope="col">Salary</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
 
      <tbody>
        <?php foreach ($data['users'] as $user) : ?>
          <tr> 
            <td><?= $user['name']; ?></td>
            <td><?= $user['work']; ?></td>
            <td><?= $user['salary']; ?></td>
            <td>
              <a href="" class="badge badge-primary tampilUbah"  data-toggle="modal" data-target="#tambahModal" data-id="<?= $user['id']; ?>">Edit</a>
            
              <a href="soal7/hapus/<?= $user['id']; ?>" class="badge badge-danger">Hapus</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" action="" method="post">
          <input type="hidden" name="id" id="id">
          <div class="form-group">
            Nama<input type="text" id="name" name="name" class="form-control form-control-user"> 
          </div>

          <div class="form-group">
          <label for="exampleFormControlSelect1">Work</label>
          <select class="form-control" name="work" id="work">
            <option value="Backend Dev"> Backend Dev</option>
              <option value="Frontend Dev"> Frontend Dev</option>
            </select>
          </div>

        
        <!--  <div class="form-group">
            <label for="exampleFormControlSelect1">Salary</label>
            <select class="form-control" name="salary" id="salary">
              <option value="12000"> 120000</option>
              <option value="Frontend Dev"> Frontend Dev</option>
            </select>
          </div> -->
        


          

          <div class="modal-footer">
            <button type="submit" name="submit" class="btn btn-primary">Save</button>
          </div>
          </form>
        </div>
    </div>
  </div>
</div>





