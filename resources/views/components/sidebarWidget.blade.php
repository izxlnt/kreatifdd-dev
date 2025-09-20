 <!-- Start sidebar widget content -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('assets/images/resources/logo-1.png') }}" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h4>Tentang Kami</h4>
                                <p>Kreatif Digital Dinamik (KDD) ialah sebuah syarikat media dan pemasaran digital yang diasaskan untuk
membantu perniagaan tempatan dan korporat membina jenama dengan lebih berkesan.</p>
                            </div>
                            <div class="form-inner">
                                <h4>Dapatkan Sebut Harga Percuma</h4>
                                <form action="assets/inc/sendemail.php" class="contact-form-validated">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Nama" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Mesej..." required></textarea>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" class="thm-btn form-inner__btn">Hantar Mesej
                                            <span class="icon-up-right-arrow"></span>
                                        </button>
                                    </div>
                                    <div class="result mt-2"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->