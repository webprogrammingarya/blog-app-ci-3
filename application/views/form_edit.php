<?php $this->load->view('partials/header'); ?>

     <!-- Page Header-->
     <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="post-heading">
                        <h1>Edit Artikel</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h1>Edit Artikel</h1>

                <div class="alert alert-warning">
                    <?php echo validation_errors(); ?>
                </div>

                <?php echo form_open_multipart(); ?>
                    <div class="mb-3">
                        <label>Judul</label>
                        <?php echo form_input('title', set_value('title', $blog['title']), 'class="form-control"') ?>
                    </div>
  
                    <div class="mb-3">
                        <label>URL</label>
                        <?php echo form_input('url', set_value('url', $blog['url']), 'class="form-control"') ?>
                    </div>

                    <div class="mb-3">
                        <label>Konten</label>
                        <?php echo form_textarea('content', set_value('content', $blog['content']), 'class="form-control"'); ?>
                    </div>

                    <div class="mb-3">
                        <label>Cover</label>
                        <?php echo form_upload('cover', $blog['cover'], 'class="form-control"'); ?>
                    </div>
                    
                    <div class="mb-5">
                        <button type="submit" class="btn btn-primary">Simpan Artikel</button>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
   
<?php $this->load->view('partials/footer'); ?>
