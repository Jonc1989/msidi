<div class="col-md-12 col-sm-12 col-xs-12" id="career" ng-controller="CareerController">
        <div class="container">
                <div class="title center">Start your career with us</div>


                <div class="col-md-12 clear-pads">
                        <div class="col-md-12 clear-pads vacansy">
                                <a class="" ng-click="toggleMe( $event )" data-toggle="collapse" href="#marketing_manager" aria-expanded="false" aria-controls="marketing_manager">

                                        <div class="carrer-name">Marketing manager</div>

                                        <div class="plus" ></div>
                                </a>
                                <div class="collapse" id="marketing_manager">
                                        <table>
                                                <tr>
                                                        <th>Job duties:</th>
                                                        <th>Job skills:</th>
                                                        <th>We offer:</th>
                                                        <th>Bonuses:</th>
                                                </tr>
                                                <tr>
                                                        <td>Plan and organise marketing activities</td>
                                                        <td>Augstākā vai nepabeiga augstākā izglītība</td>
                                                        <td>Komfortabla darba vide</td>
                                                        <td>Draudzīgs kolektīvs</td>
                                                </tr>
                                                <tr>
                                                        <td>Sagatavot marketinga materiālus</td>
                                                        <td>Ļoti labs komunikācijas un sadarbības prasmes</td>
                                                        <td>Interesanta, radoša un dinamiska darba vide</td>
                                                        <td>Elastīgs darba grafiks</td>
                                                </tr>
                                        </table>
                                </div>
                        </div>

                        <div class="col-md-12 clear-pads vacansy">
                                <a class="" ng-click="toggleMe( $event )" data-toggle="collapse" href="#game_marketing_manager" aria-expanded="false" aria-controls="game_marketing_manager">
                                        <div class="carrer-name">Computer game marketing manager</div>
                                        <!--<div class="minus"></div>-->
                                        <div class="plus" ></div>
                                </a>
                                <div class="collapse" id="game_marketing_manager">
                                        <table>
                                                <tr>
                                                        <th>Job duties:</th>
                                                        <th>Job skills:</th>
                                                        <th>We offer:</th>
                                                        <th>Bonuses:</th>
                                                </tr>
                                                <tr>
                                                        <td>Plan and organise marketing activities</td>
                                                        <td>Augstākā vai nepabeiga augstākā izglītība</td>
                                                        <td>Komfortabla darba vide</td>
                                                        <td>Draudzīgs kolektīvs</td>
                                                </tr>
                                                <tr>
                                                        <td>Sagatavot marketinga materiālus</td>
                                                        <td>Ļoti labs komunikācijas un sadarbības prasmes</td>
                                                        <td>Interesanta, radoša un dinamiska darba vide</td>
                                                        <td>Elastīgs darba grafiks</td>
                                                </tr>
                                        </table>
                                </div>
                        </div>

                        <div class="col-md-12 clear-pads vacansy">
                                <a class="" ng-click="toggleMe( $event )" data-toggle="collapse" href="#net_developer" aria-expanded="false" aria-controls="net_developer">
                                        <div class="carrer-name">.NET developer</div>
                                        <!--<div class="minus"></div>-->
                                        <div class="plus" ></div>
                                </a>
                                <div class="collapse" id="net_developer">
                                        <table>
                                                <tr>
                                                        <th>Job duties:</th>
                                                        <th>Job skills:</th>
                                                        <th>We offer:</th>
                                                        <th>Bonuses:</th>
                                                </tr>
                                                <tr>
                                                        <td>Plan and organise marketing activities</td>
                                                        <td>Augstākā vai nepabeiga augstākā izglītība</td>
                                                        <td>Komfortabla darba vide</td>
                                                        <td>Draudzīgs kolektīvs</td>
                                                </tr>
                                                <tr>
                                                        <td>Sagatavot marketinga materiālus</td>
                                                        <td>Ļoti labs komunikācijas un sadarbības prasmes</td>
                                                        <td>Interesanta, radoša un dinamiska darba vide</td>
                                                        <td>Elastīgs darba grafiks</td>
                                                </tr>
                                        </table>
                                </div>
                        </div>

                        <div class="col-md-12 clear-pads vacansy">
                                <a class="" ng-click="toggleMe( $event )" data-toggle="collapse" href="#sales_manager" aria-expanded="false" aria-controls="sales_manager">
                                        <div class="carrer-name">Sales manager</div>
                                        <!--<div class="minus"></div>-->
                                        <div class="plus" ></div>
                                </a>
                                <div class="collapse" id="sales_manager">
                                        <table>
                                                <tr>
                                                        <th>Job duties:</th>
                                                        <th>Job skills:</th>
                                                        <th>We offer:</th>
                                                        <th>Bonuses:</th>
                                                </tr>
                                                <tr>
                                                        <td>Plan and organise marketing activities</td>
                                                        <td>Augstākā vai nepabeiga augstākā izglītība</td>
                                                        <td>Komfortabla darba vide</td>
                                                        <td>Draudzīgs kolektīvs</td>
                                                </tr>
                                                <tr>
                                                        <td>Sagatavot marketinga materiālus</td>
                                                        <td>Ļoti labs komunikācijas un sadarbības prasmes</td>
                                                        <td>Interesanta, radoša un dinamiska darba vide</td>
                                                        <td>Elastīgs darba grafiks</td>
                                                </tr>
                                        </table>
                                </div>
                        </div>
                </div>

                <div class="col-md-12">
                        <form name="careerForm" id="vacansy-form" ng-submit="send()" novalidate ng-init="setFormScope( this )">
                                <div class="col-md-6 form-group contact-form-input">
                                        <div class="cs-select cs-skin-elastic">

                                                <div class="cs-options">
                                                        <ul>
                                                                <li data-option data-value="marketing_manager" class="cs-selected"><span>Marketing manager</span></li>
                                                                <li data-option data-value="game_marketing_manager"><span>Computer game marketing manager</span></li>
                                                                <li data-option data-value="net"><span>.NET developer</span></li>
                                                                <li data-option data-value="sale"><span>Sales manager</span></li>
                                                        </ul>
                                                </div>

                                                <select class="form-control cs-select cs-skin-elastic"
                                                        required
                                                        ng-model="vacancy.position" name="position">
                                                        <option value="" disabled selected>Choose your position</option>
                                                        <option value="marketing_manager">Marketing manager</option>
                                                        <option value="game_marketing_manager">Computer game marketing manager</option>
                                                        <option value="net">.NET developer</option>
                                                        <option value="sale">Sales manager</option>
                                                </select>
                                        </div>
                                </div>
                                <div class="col-md-6 form-group contact-form-input">
                                        <input class="form-control"
                                               name="email"
                                               ng-model="vacancy.email"
                                               type="email"
                                               required
                                               placeholder="Email address">
                                </div>

                                <div class="col-md-12 form-group contact-form-input">
                                        <textarea rows="10"
                                                  class="form-control"
                                                  name="message"
                                                  required
                                                  ng-model="vacancy.message"
                                                  placeholder="Message"></textarea>
                                </div>
                                <button class="form-control send" type="submit" value="">
                                        <div class="more-txt">Send message</div>
                                        <div class="more-btn circle"></div>
                                        <div class="more-btn-pressed circle"></div>
                                        <div class="more-btn-hover circle"></div>
                                </button>
                        </form>
                </div>
        </div>

</div>
