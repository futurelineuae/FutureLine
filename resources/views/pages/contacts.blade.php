@extends('layout')

@section('content')
                <!-- Page content wrap -->
                <div class="page_content_wrap scheme_default">
                    <!-- Content -->
                    <div class="content">
                        <article class="post_item_single">
                            <div class="post_content">
                                <!-- Our Contacts -->
                                <div class="copypress-custom-bg-2">
                                    <div class="content_wrap sc_layouts_column_icons_position_left">
                                        <div class="empty_space height_9_4em"></div>
                                        <div id="sc_form_3" class="sc_form sc_form_detailed simple sc_align_default">
                                            <div class="trx_addons_columns_wrap">
                                                <div class="trx_addons_column-1_2">
                                                    <div class="sc_form_info">
                                                        <h2 class="sc_item_title sc_form_title sc_align_default sc_item_title_style_default">Our Contacts</h2>
                                                        <div class="sc_form_info_item sc_form_info_item_address">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Our Office</span>
                                                                <span class="sc_form_info_data">
                                                                    <span>123, NewLenox,Chicago, IL 60606</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="sc_form_info_item sc_form_info_item_phone">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Phone</span>
                                                                <span class="sc_form_info_data">
                                                                    <span>800-123-4567</span>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="sc_form_info_item sc_form_info_item_email">
                                                            <span class="sc_form_info_icon"></span>
                                                            <span class="sc_form_info_area">
                                                                <span class="sc_form_info_title">Email Address</span>
                                                                <span class="sc_form_info_data">
                                                                    <a href="mailto:example@yoursite.com">example@yoursite.com</a>
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div><div class="trx_addons_column-1_2">
                                                    <form class="sc_form_form " method="post" action="include/sendmail.php">
                                                        <h2 class="sc_item_title sc_form_title sc_align_default sc_item_title_style_default">Request Quote</h2>
                                                        <label class="sc_form_field sc_form_field_name required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="text" id="name" value="" aria-required="true" placeholder="Your name">
                                                            </span>
                                                        </label>
                                                        <label class="sc_form_field sc_form_field_email required">
                                                            <span class="sc_form_field_wrap">
                                                                <input type="text" name="email" id="email" value="" aria-required="true" placeholder="Your e-mail">
                                                            </span>
                                                        </label>
                                                        <label class="sc_form_field sc_form_field_message required">
                                                            <span class="sc_form_field_wrap">
                                                                <textarea name="message" id="message" aria-required="true" placeholder="Your message"></textarea>
                                                            </span>
                                                        </label>
                                                        <div class="sc_form_field sc_form_field_button">
                                                            <button class="sc_button_dark">Send Message</button>
                                                        </div>
                                                        <div class="trx_addons_message_box sc_form_result"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="empty_space height_9_4em"></div>
                                    </div>
                                </div>
                                <!-- /Our Contacts -->
                                <!-- Google Map -->
                                <div class="sc_layouts_column_icons_position_left">
                                    <div id="sc_googlemap_3_wrap" class="sc_googlemap_wrap">
                                        <div id="sc_googlemap_3" class="sc_googlemap sc_googlemap_default width_100_per height_515" data-zoom="16" data-style="default">
                                            <div id="sc_googlemap_3_1" class="sc_googlemap_marker" data-latlng="" data-address="350 5th Avenue, New York, NY 10001" data-description="" data-title="" data-icon="http://placehold.it/150x150.jpg"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Google Map -->
                            </div>
                        </article>
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Page content wrap -->
                @endsection