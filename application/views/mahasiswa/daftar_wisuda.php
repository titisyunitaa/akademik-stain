<div class="content-wrapper">
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
                <h1 style="margin-left: 50px; font-size: 40px;"><?php echo $title;?></h1>
                <p style="margin-left: 50px; font-size: 20px; color: #666;">Lengkapi formulir pendaftaran wisuda dan unduh dokumen yang diperlukan</p>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 50px; margin-top: 10px;">
        <div class="col-md-12">
            <div class="card card-default">
                
            <div class="card-body p-0">
                <div class="bs-stepper">
                    <div class="bs-stepper-header" role="tablist">
                        <!-- your steps here -->
                        <div class="step" data-target="#pribadi-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="pribadi-part" id="pribadi-part-trigger">
                                <span class="bs-stepper-circle">1</span>
                                <span class="bs-stepper-label">Informasi Pribadi</span>
                            </button>
                        </div>

                        <div class="line"></div>

                        <div class="step" data-target="#information-part">
                            <button type="button" class="step-trigger" role="tab" aria-controls="information-part" id="information-part-trigger">
                                <span class="bs-stepper-circle">2</span>
                                <span class="bs-stepper-label">Various information</span>
                            </button>
                        </div>
                        <div class="line"></div>

                        


                    </div>

                <div class="bs-stepper-content">
                    <!-- your steps content here -->
                    <div id="pribadi-part" class="content" role="tabpanel" aria-labelledby="pribadi-part-trigger">
                    <h1 style="font-size: 24px; font-weight: bold;">Informasi Pribadi</h1>    
                    <p style="color: #666; margin-bottom: 20px;">Lengkapi data pribadi Anda sesuai dengan dokumen resmi</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputName">Nama Lengkap</label>
                                <input type="text" class="form-control" id="exampleInputName" placeholder="Masukkan Nama Lengkap" required>
                            </div>

                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="number" class="form-control" id="nik" placeholder="Masukkan Nomor NIK" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat sesuai KTP</label>
                                <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat sesuai KTP" required>
                            </div>

                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukkan Tempat Lahir" required>
                            </div>

                            <div class="form-group">
                                <label for="asal_sekolah">Asal Sekolah</label>
                                <input type="text" class="form-control" id="asal_sekolah" placeholder="Masukkan Asal Sekolah" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Masukkan Email" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_ayah">Nama Ayah</label>
                                <input type="text" class="form-control" id="nama_ayah" placeholder="Masukkan Nama Ayah" required>
                            </div>

                            <div class="form-group">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" class="form-control" id="nama_ibu" placeholder="Masukkan Nama Ibu" required>
                            </div>

                            <div class="form-group">
                                <label for="alamat_ortu">Alamat Orang Tua</label>
                                <input type="text" class="form-control" id="alamat_ortu" placeholder="Masukkan Alamat Orang Tua" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_hp">No. HP</label>
                                <input type="number" class="form-control" id="no_hp" placeholder="Masukkan Nomor HP" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="no_kk">No. KK</label>
                                <input type="number" class="form-control" id="no_kk" placeholder="Masukkan Nomor KK" required>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>

                          

                             <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                            </div>

                            <div class="form-group">
                                <label for="status_perkawinan">Status Perkawinan</label>
                                <select class="form-control" id="status_perkawinan" name="status_perkawinan" required>
                                    <option value="">-- Pilih Status Perkawinan --</option>
                                    <option value="belum_menikah">Belum Menikah</option>
                                    <option value="menikah">Menikah</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan Sementara</label>
                                <select class="form-control" id="pekerjaan" name="pekerjaan" required>
                                    <option value="">-- Pilih Pekerjaan Sementara --</option>
                                    <option value="belum_bekerja">Belum Bekerja</option>
                                    <option value="bekerja">Bekerja</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="pekerjaan_ayah">Pekerjaan Ayah</label>
                                <input type="text" class="form-control" id="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah" required>
                            </div>

                            <div class="form-group">
                                <label for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                <input type="text" class="form-control" id="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu" required>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                    </div>

                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Upload</span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            Visit <a href="https://github.com/Johann-S/bs-stepper/#how-to-use-it">bs-stepper documentation</a> for more examples and information about the plugin.
        </div>
    </div>           
    </div>
        </div>
    
  </section>
</div>
  
