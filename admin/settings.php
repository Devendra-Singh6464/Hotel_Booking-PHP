<?php
require('inc/essentials.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

    <?php require('inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>

                <!-- General settings section -->
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 poppins-regular">General Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Edit </button>
                        </div>
                        <h6 class="card-subtitle mb-1 poppins-regular">Site Title</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 poppins-regular">About Us</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- General settings Modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form" method="">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control" rows="3" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" onclick="upd_general(site_title.value, site_about.value)" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown section -->
                <div class="card mt-4 border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 poppins-regular">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
                            </div>
                        </div>
                        <p class="card-text">
                            No Customers will be allowed to book Hotel room,when shutdown mode is turned on.
                        </p>
                    </div>
                </div>

                <!-- Contact details section -->
                <div class="card mt-4 border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0 poppins-regular">Contacts Settings</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 poppins-regular">Address</h6>
                                    <p class="card-text" id="address"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 poppins-regular">Google Map</h6>
                                    <p class="card-text" id="gmap"></p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 poppins-regular">Phone Number</h6>
                                    <p class="card-text mb-1">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn1"></span>
                                    </p>
                                    <p class="card-text">
                                        <i class="bi bi-telephone-fill"></i>
                                        <span id="pn2"></span>
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <h6 class="card-subtitle mb-1 poppins-regular">E-mail</h6>
                                    <p class="card-text" id="email"></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h6 class="card-subtitle mb-1 poppins-regular">Social Links</h6>
                                <p class="card-text mb-1">
                                    <i class="bi bi-instagram"></i>
                                    <span id="insta"></span>
                                </p>
                                <p class="card-text mb-1">
                                    <i class="bi bi-facebook"></i>
                                    <span id="fb"></span>
                                </p>
                                <p class="card-text mb-1">
                                    <i class="bi bi-threads"></i>
                                    <span id="thrd"></span>
                                </p>
                                <p class="card-text mb-1">
                                    <i class="bi bi-twitter-x"></i>
                                    <span id="tw"></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact details Modal -->
                <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form id="contacts_s_form" method="">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Contacts Settings</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Google Map Link</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Phoner Numbers (with country code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">E-mail</label>
                                                    <input type="email" name="email" id="email_inp" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-instagram"></i></span>
                                                        <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-facebook"></i></span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-threads"></i></span>
                                                        <input type="text" name="thrd" id="thrd_inp" class="form-control shadow-none">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-twitter-x"></i></span>
                                                        <input type="text" name="tw" id="tw_inp" class="form-control shadow-none">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>
    <script>
        let general_data, contacts_data;

        let general_s_form = document.getElementById('general_s_form');
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');

        let contacts_s_form = document.getElementById('contacts_s_form');


        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');
            let shutdown_toggle = document.getElementById('shutdown-toggle');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                if (general_data.shutdown == 0) {
                    shutdown_toggle.checked = false;
                    shutdown_toggle.value = 0;
                } else {
                    shutdown_toggle.checked = true;
                    shutdown_toggle.value = 1;
                }
            }
            xhr.send('get_general');
        }

        general_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        })

        function upd_general(site_title, site_about) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                var myModal = document.getElementById('general-s')
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Changes saved');
                    get_general();
                } else {
                    alert('error', 'No Changes made!');
                    site_title_val
                }
            }
            xhr.send('site_title=' + site_title + '&site_about=' + site_about + '&upd_general');
        }

        function upd_shutdown(val) {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (this.responseText == 1) {
                    alert('Success', 'Site has been Shutdown!');
                } else {
                    alert('success', 'Shutdown mode off!');
                }
                get_general();
            }

            xhr.send('upd_shutdown=' + val);
        }

        function get_contacts() {
            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'insta', 'fb', 'thrd', 'tw'];

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                contacts_data = JSON.parse(this.responseText);
                contacts_data = Object.values(contacts_data);
                // console.log(contacts_data);

                for (i = 0; i < contacts_p_id.length; i++) {
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
                }
                contacts_inp(contacts_data);
            }
            xhr.send('get_contacts');
        }

        function contacts_inp(data){
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'insta_inp', 'fb_inp', 'thrd_inp', 'tw_inp'];

            for(i=0;i<contacts_inp_id.length;i++){
                document.getElementById(contacts_inp_id[i]).value = data[i+1];
                // console.log(contacts_inp_id[i]);
                // console.log(data[i+1]);
            }
        }

        contacts_s_form.addEventListener('submit', function(e){
            e.preventDefault();
            upd_contacts();
        })

        function upd_contacts(){
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'insta', 'fb', 'thrd', 'tw'];
            let contacts_inp_id=  ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'insta_inp', 'fb_inp', 'thrd_inp', 'tw_inp'];

            let data_str="";
            
            for(i=0;i<index.length; i++){
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + '&';
            }
            // console.log(data_str);
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function(){
                var myModal = document.getElementById('contacts-s')
                var modal = bootstrap.Modal.getInstance(myModal);
                modal.hide();

                if(this.responseText == 1){
                    alert('success', 'Changes saved!');
                    get_contacts();
                }
                else{
                    alert('error', 'No changes made!');
                }
            }
        }

        window.onload = function() {
            get_general();
            get_contacts();
        }
    </script>

</body>

</html>