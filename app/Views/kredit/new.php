
<?= $this->extend('templates/index'); ?>

<?= $this->section("page-content"); ?>
<link href="<?= base_url();?>css/form.css" rel="stylesheet">
    <div class="loading-page">
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
    <div id="Moduleloader-page" class="jssorl-009-spin">
        <img src="image/spin.svg" />
    </div>
    <div  id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- End of Topbar -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">PENDAFTARAN KREDIT</h1>
                </div>
            </div>
            <div class="container">
                <div class="wrapper my-5 mx-auto" style="max-width: 540px">
                    <form action="#" id="form-slide">
                        <div id="slide">
                        <!-- Form Data Pemohon dan Produk -->
                            <div class="form-group">
                                <label>Produk</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input id="input1" name="produk" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Sesuai KTP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input id="input2" name="nama_ktp" type="text" class="form-control">
                                    <select name="jenis1" id="input3" class="form-control bg-primary" style="width: 135px;color:white;" required>
                                        <option value='Laki-laki'>Laki-laki</option> 
                                        <option value='Perempuan'>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor KTP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input id="input4" name="no_ktp" type="text" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label>Masa Berlaku</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="masa_berlaku" type="text" class="form-control">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label>Nama Ibu Kandung</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="nama_ibu" id="input5" type="text" class="form-control">
                                </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="pend_ter1" id="input6"  type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Profesi / Pekerjaan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="produk" id="input7" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="status" id="input8" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Tanggungan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="jumlah_tangg" id="input9" type="text" class="form-control"><span class="input-group-text" id="basic-addon2">Orang</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon / HP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="no_telp1" id="input10" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nama Pasangan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="nama_pas" id="input11" type="text" class="form-control">
                                <select name="jenis2" id="input12" class="form-control bg-primary" style="width: 135px;color:white;" required>
                                        <option value='Laki-laki'>Laki-laki</option> 
                                        <option value='Perempuan'>Perempuan</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Status Pasangan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="status_pas" id="input13" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tempat/Tgl. Lahir</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="ttl2" id="input14" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor KTP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="no_ktp2" id="input15" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="pend_ter2" id="input16" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Profesi / Pekerjaan</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="profesi2" id="input17" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Usaha</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="usaha2" id="input18" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Telepon / HP</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input name="no_telp2" id="input19" type="text" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Input1</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input1').removeAttribute('disabled') : document.querySelector('#input1').setAttribute('disabled', true)" />
                                    <input id="input1" type="text" class="form-control" disabled placeholder="Input1" />
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="">Input2</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input2').removeAttribute('disabled') : document.querySelector('#input2').setAttribute('disabled', true)" />
                                    <input id="input2" type="text" class="form-control" disabled placeholder="Input2" />
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="">Input3</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input3').removeAttribute('disabled') : document.querySelector('#input3').setAttribute('disabled', true)" />
                                    <input id="input3" type="text" class="form-control" disabled placeholder="Input3" />
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="">Input4</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input4').removeAttribute('disabled') : document.querySelector('#input4').setAttribute('disabled', true)" />
                                    <input id="input4" type="text" class="form-control" disabled placeholder="Input4" />
                                </div>
                                </div>

                                <div class="form-group">
                                <label for="">Input5</label>
                                <div class="d-flex align-items-center justify-content-around">
                                    <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input5').removeAttribute('disabled') : document.querySelector('#input5').setAttribute('disabled', true)" />
                                    <input id="input5" type="text" class="form-control" disabled placeholder="Input5" />
                                </div>
                            </div> -->

                            <button type="button" class="btn btn-primary float-right" id="btn-next">Next</button>
                        </div>

                        <div id="slide">
                            <div class="form-group">
                                <label for="">Input6</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input6').removeAttribute('') : document.querySelector('#input6').setAttribute('', true)" />
                                <input id="input6" type="text" class="form-control"  placeholder="Input6" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Input7</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input7').removeAttribute('') : document.querySelector('#input7').setAttribute('', true)" />
                                <input id="input7" type="text" class="form-control"  placeholder="Input7" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Input8</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input8').removeAttribute('') : document.querySelector('#input8').setAttribute('', true)" />
                                <input id="input8" type="text" class="form-control"  placeholder="Input8" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Input9</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input9').removeAttribute('') : document.querySelector('#input9').setAttribute('', true)" />
                                <input id="input9" type="text" class="form-control"  placeholder="Input9" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Input10</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input10').removeAttribute('') : document.querySelector('#input10').setAttribute('', true)" />
                                <input id="input10" type="text" class="form-control"  placeholder="Input10" />
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" id="btn-before">Before</button>
                                <button type="button" class="btn btn-primary" id="btn-next">Next</button>
                            </div>
                        </div>

                        <div id="slide">

                            <div class="form-group">
                                <label for="">Input11</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input11').removeAttribute('') : document.querySelector('#input11').setAttribute('', true)" />
                                <input id="input11" type="text" class="form-control"  placeholder="Input11" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Input12</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input12').removeAttribute('') : document.querySelector('#input12').setAttribute('', true)" />
                                <input id="input12" type="text" class="form-control"  placeholder="Input12" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Input13</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input13').removeAttribute('') : document.querySelector('#input13').setAttribute('', true)" />
                                <input id="input13" type="text" class="form-control"  placeholder="Input13" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Input14</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input14').removeAttribute('') : document.querySelector('#input14').setAttribute('', true)" />
                                <input id="input14" type="text" class="form-control"  placeholder="Input14" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Input15</label>
                                <div class="d-flex align-items-center justify-content-around">
                                <input type="checkbox" class="border mr-3" onclick="event.target.checked ? document.querySelector('#input15').removeAttribute('') : document.querySelector('#input15').setAttribute('', true)" />
                                <input id="input15" type="text" class="form-control"  placeholder="Input15" />
                                </div>
                            </div>

                            <div class="float-right">
                                <button type="button" class="btn btn-secondary" id="btn-before">Before</button>
                                <button type="button" onclick="swal({ title: 'Success', text: 'Form submitted!', button: 'Woke', icon: 'success' })" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> 
        </div> 
    </div> 
<script src="<?= base_url ('/js/form.js')?>"></script>
<?= $this->endSection(); ?>