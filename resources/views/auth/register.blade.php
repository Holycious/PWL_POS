<!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registrasi User</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
 </head>
 
 <body>
     <div class="container mt-5">
         <div class="row justify-content-center">
             <div class="col-md-6">
                 <div class="card">
                     <div class="card-header text-center">Registrasi User</div>
                     <div class="card-body">
                         <form action="{{ url('register') }}" method="POST">
                             @csrf
                             <div class="mb-3">
                                 <label for="username" class="form-label">Username</label>
                                 <input type="text" class="form-control" id="username" name="username" required>
                             </div>
                             <div class="mb-3">
                                 <label for="nama" class="form-label">Nama Lengkap</label>
                                 <input type="text" class="form-control" id="nama" name="nama" required>
                             </div>
                             <div class="mb-3">
                                 <label for="password" class="form-label">Password</label>
                                 <input type="password" class="form-control" id="password" name="password" required>
                             </div>
                             <div class="mb-3">
                                 <label for="level_id" class="form-label">Level</label>
                                 <select class="form-control" id="level_id" name="level_id" required>
                                     <option value="">Pilih Level</option>
                                     @foreach ($level as $lvl)
                                         <option value="{{ $lvl->level_id }}">{{ $lvl->level_nama }}</option>
                                     @endforeach
                                 </select>
                             </div>
                             <button type="submit" class="btn btn-primary w-100">Daftar</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </body>
 
 </html>