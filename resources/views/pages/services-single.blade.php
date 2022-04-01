@extends('layout')

@section('content')
                <!-- Page content wrap -->
                <div class="page_content_wrap scheme_default">
                    <div class="content_wrap">
                        <!-- Content -->
                        <div class="content">
                            <article class="services_page">
                                <section class="services_page_header">
                                    <h2 class="services_page_title">Copying Services</h2>
                                </section>
                                <section class="services_page_content">
                                    <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit.</p>
                                    <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Aliquam bibendum lacus quis nulla dignissim faucibus. Sed mauris enim, bibendum at purus aliquet, maximus molestie tortor. Sed faucibus et tellus eu sollicitudin. Sed fringilla malesuada luctus.</p>
                                </section>
                            </article>
                            <section class="comments_wrap">
                                <div class="comments_form_wrap">
                                    <h3 class="section_title comments_form_title">Leave a reply</h3>
                                    <div class="comments_form">
                                        <div id="respond" class="comment-respond">
                                            <form action="#" method="post" id="commentform" class="comment-form " novalidate>
                                                <div class="comments_field comments_comment">
                                                    <label for="comment" class="required">Comment</label>
                                                    <span class="sc_form_field_wrap">
                                                        <textarea id="comment" name="comment" placeholder="Your Message *" aria-required="true"></textarea>
                                                    </span>
                                                </div>
                                                <div class="comments_field comments_author">
                                                    <label for="comment" class="required">Name</label>
                                                    <span class="sc_form_field_wrap">
                                                        <input id="author" name="author" type="text" placeholder="Your Name *" value="" aria-required="true" />
                                                    </span>
                                                </div>
                                                <div class="comments_field comments_email">
                                                    <label for="comment" class="required">E-mail</label>
                                                    <span class="sc_form_field_wrap">
                                                        <input id="email" name="email" type="text" placeholder="Your E-mail *" value="" aria-required="true" />
                                                    </span>
                                                </div>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="send_comment" class="submit" value="Submit" />
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <!-- /Content -->
                        <!-- Sidebar -->
                        <div class="sidebar right widget_area scheme_side">
                            <div class="sidebar_inner">
                                <!-- Widget: Categories -->
                                <aside class="widget widget_categories">
                                    <h5 class="widget_title">Categories</h5>
                                    <ul>
                                        <li>
                                            <a href="#">3D Technology</a>
                                        </li>
                                        <li>
                                            <a href="#">Copy Everything</a>
                                        </li>
                                        <li>
                                            <a href="#">Lifestyle</a>
                                        </li>
                                        <li>
                                            <a href="#">Photography</a>
                                        </li>
                                        <li>
                                            <a href="#">Story in Colors</a>
                                        </li>
                                        <li>
                                            <a href="#">Travellers</a>
                                        </li>
                                    </ul>
                                </aside><!-- /Widget: Categories --><!-- Widget: Search --><aside class="widget widget_search">
                                <h5 class="widget_title">Search</h5>
                                <form role="search" method="get" class="search-form" action="#">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" />
                                    </label>
                                    <input type="submit" class="search-submit" value="Search" />
                                </form>
                            </aside><!-- /Widget: Search --><!-- Widget: Recent comments --><aside class="widget widget_recent_comments">
                                <h5 class="widget_title">Comments</h5>
                                <ul id="recentcomments">
                                    <li class="recentcomments">
                                        <span class="comment-author-link">Martin Moore</span> on
                                        <a href="post-single.html">10 Ingenious Newspaper Designs</a>
                                    </li>
                                    <li class="recentcomments">
                                        <span class="comment-author-link">Martin Moore</span> on
                                        <a href="post-single.html">Catalogs: the Best Way to Present Product Information</a>
                                    </li>
                                </ul>
                            </aside><!-- /Widget: Recent comments --><!-- Widget: Calendar --><aside class="widget widget_calendar">
                                <h5 class="widget_title">Calendar</h5>
                                <div id="calendar_wrap" class="calendar_wrap">
                                    <table id="tpl-calendar">
                                        <caption>March 2017</caption>
                                        <thead>
                                        <tr>
                                            <th scope="col" title="Monday">M</th>
                                            <th scope="col" title="Tuesday">T</th>
                                            <th scope="col" title="Wednesday">W</th>
                                            <th scope="col" title="Thursday">T</th>
                                            <th scope="col" title="Friday">F</th>
                                            <th scope="col" title="Saturday">S</th>
                                            <th scope="col" title="Sunday">S</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td colspan="2" class="pad">&nbsp;</td>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>4</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>7</td>
                                            <td>8</td>
                                            <td>9</td>
                                            <td>10</td>
                                            <td>11</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>14</td>
                                            <td>15</td>
                                            <td>16</td>
                                            <td>17</td>
                                            <td>18</td>
                                            <td>19</td>
                                        </tr>
                                        <tr>
                                            <td id="today">20</td>
                                            <td>21</td>
                                            <td>22</td>
                                            <td>23</td>
                                            <td>24</td>
                                            <td>25</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td>28</td>
                                            <td>29</td>
                                            <td>30</td>
                                            <td>31</td>
                                            <td class="pad" colspan="2">&nbsp;</td>
                                        </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <td colspan="3" id="prev">
                                                <a href="#">&laquo; Feb</a>
                                            </td>
                                            <td class="pad">&nbsp;</td>
                                            <td colspan="3" id="next">
                                                <a href="#">Apr &raquo;</a>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </aside><!-- /Widget: Calendar --><!-- Widget: Recent Posts --><aside class="widget widget_recent_entries">
                                <h5 class="widget_title">Recent Posts</h5>
                                <ul>
                                    <li>
                                        <a href="post-single.html">Catalogs: the Best Way to Present Product Information</a>
                                    </li>
                                    <li>
                                        <a href="post-single.html">10 Ingenious Newspaper Designs</a>
                                    </li>
                                    <li>
                                        <a href="post-single.html">5 Great Magazines to Give for Christmas</a>
                                    </li>
                                </ul>
                            </aside><!-- /Widget: Recent Posts --><!-- Widget: Tag Cloud --><aside class="widget widget_tag_cloud">
                                <h5 class="widget_title">Tags</h5>
                                <div class="tagcloud">
                                    <a href="#" title="8 topics">booklets</a>
                                    <a href="#" title="5 topics">branding</a>
                                    <a href="#" title="5 topics">business</a>
                                    <a href="#" title="8 topics">business cards</a>
                                    <a href="#" title="8 topics">magazines</a>
                                    <a href="#" title="8 topics">posters</a>
                                    <a href="#" title="9 topics">seo</a>
                                    <a href="#" title="9 topics">team</a>
                                </div>
                            </aside><!-- /Widget: Tag Cloud --><!-- Widget: Meta --><aside class="widget widget_meta">
                                <h5 class="widget_title">Meta</h5>
                                <ul>
                                    <li>
                                        <a href="#">Log in</a>
                                    </li>
                                    <li>
                                        <a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a>
                                    </li>
                                    <li>
                                        <a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a>
                                    </li>
                                    <li>
                                        <a href="#" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a>
                                    </li>
                                </ul>
                            </aside>
                                <!-- /Widget: Meta -->
                            </div>
                        </div>
                        <!-- /Sidebar -->
                    </div>
                </div>
                <!-- /Page content wrap -->
                @endsection