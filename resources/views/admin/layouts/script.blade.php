<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/template/js/adminlte.min.js') }}"></script>
<!-- Chartjs -->
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<!-- HTML5 lightbox -->
<script src="{{ asset('assets/plugins/html5lightbox/html5lightbox.js') }}"></script>
<!-- Select 2 -->
<script src="{{ asset('assets/plugins/select2/js/select2.full.js') }}"></script>
<!-- Summer note -->
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- Moment js -->
<script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
<!-- Tempusdominus -->
<script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Toast -->
<script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- CKEDITOR -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    $(document).ready(function () {
        let url = window.location;

        // for sidebar menu entirely but not cover treeview
        $('ul.nav-sidebar a').filter(function () {
            if (this.href) {
                return this.href === url || url.href.indexOf(this.href) === 0;
            }
        }).addClass('active');

        // for the treeview
        $('ul.nav-treeview a').filter(function () {
            if (this.href) {
                return this.href === url || url.href.indexOf(this.href) === 0;
            }
        }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');

        $('body').Layout('fixLayoutHeight')
    })

    $('select').select2()

    $(document).ready(function () {
        if ($(".btn-remove").length > 0) {
            $('.btn-remove').click(function (e) {
                e.preventDefault();

                let id = $(this).attr('data-id');

                Swal.fire({
                    title: 'B???n ch???c ch???n ch??a?',
                    text: "D??? li???u b??? xo?? s??? kh??ng th??? kh??i ph???c ???????c!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Hu???',
                    confirmButtonText: '?????ng ?? xo??!'
                }).then(async (result) => {
                    if (result.isConfirmed) {
                        let url = $(this).attr('href');
                        $.ajax({
                            url: `${url}`,
                            type: 'GET',
                            success: function () {
                                Swal.fire(
                                    'Xo?? th??nh c??ng!',
                                    'D??? li???u ???? ???????c xo?? ho??n to??n.',
                                    'success'
                                ).then(() => {
                                    $(`#row-${id}`).fadeOut(500, function () {
                                        $(this).remove();
                                    })
                                })
                            },
                            error: function (xhr, status, error) {
                                Swal.fire(
                                    'C?? v???n ????? x???y ra',
                                    'D??? li???u ch??a ???????c xo??',
                                    'question'
                                )
                            },
                        });
                    }
                })
            });
        }
    })

    function previewMultiple(event) {
        $('.input-file-dummy').val($('#thumb').val());
        $('#galleryPhotos').empty();
        let urls = URL.createObjectURL(event.target.files[0]);
        $('#galleryPhotos').html(`
            <div class="imagePhoto">
                <img src="${urls}" /><a href="javascript:void(0)" class="removePhoto"><i class="fa fa-trash-alt"></i></a>
            </div>`)

        $(".removePhoto").click(function () {
            $(this).parent().fadeOut(300);
            $('.input-file-dummy').val('');
        });
    }

    if ($("#date_of_birth").length > 0) {
        $('#date_of_birth').datetimepicker({
            format: 'DD/MM/YYYY',
            ignoreReadonly: true
        });
    }

    function string_to_slug(str) {
        let title, slug

        //?????i ch??? hoa th??nh ch??? th?????ng
        slug = str.toLowerCase()

        //?????i k?? t??? c?? d???u th??nh kh??ng d???u
        slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a')
        slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e')
        slug = slug.replace(/i|??|??|???|??|???/gi, 'i')
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o')
        slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u')
        slug = slug.replace(/??|???|???|???|???/gi, 'y')
        slug = slug.replace(/??/gi, 'd')
        //X??a c??c k?? t??? ?????t bi???t
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\|_/gi, '')
        //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
        slug = slug.replace(/ /gi, "-")
        //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
        //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
        slug = slug.replace(/\-\-\-\-\-/gi, '-')
        slug = slug.replace(/\-\-\-\-/gi, '-')
        slug = slug.replace(/\-\-\-/gi, '-')
        slug = slug.replace(/\-\-/gi, '-')
        //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
        slug = '@' + slug + '@'
        slug = slug.replace(/\@\-|\-\@|\@/gi, '')
        //In slug ra textbox c?? id ???slug???
        return slug
    }

    if ($("#description").length > 0) {
        CKEDITOR.replace( 'description', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    }

    function createSlug(e, titleId) {
        let inputSlug = $(e).siblings('input')
        let content = $(`#${titleId}`).val()
        let slug = string_to_slug(content)
        inputSlug.val(slug)
    }


    /* toastr */
    @if(Session::has('success'))
        toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('success') }}");
    @endif
        @if(Session::has('error'))
        toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.error("{{ session('error') }}");
    @endif
        @if(Session::has('info'))
        toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.info("{{ session('info') }}");
    @endif
        @if(Session::has('warning'))
        toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.warning("{{ session('warning') }}");
    @endif
    /* end toastr */

</script>
