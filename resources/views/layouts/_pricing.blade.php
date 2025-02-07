<section class="pricing-section set-bg spad" data-setbg="img/pricing-bg.jpg" id="ticket_detail_section">
    <div class="mx-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Ticket Pricing</h2>
                    <p>Get your event ticket plan</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-8">
                <div class="price-item">
                    <h4>Standerd single</h4>
                    <div class="pi-price">
                        <h2><span>₹</span>1999</h2>
                    </div>
                    <ul>
                        <li>Unlimited Happiness</li>
                        <li>Unlimited Food</li>
                        <li>One Large Drink</li>
                    </ul>
                    <!-- <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a> -->
                    <!-- <input  class="primary-btn w-50" type="number" min="0" > -->
                    <div class="input-group w-50 mx-auto my-3 ">
                        <button ng-click="manup.ticket_minus('std_sgl')"
                            class="btn rounded-start-circle btn-bg-gradient"><i class="fa fa-minus text-white"
                                aria-hidden="true"></i></button>
                        <input ng-model="manup.std_sgl_tickets"
                            ng-change="manup.number_of_ticket(manup.std_sgl_tickets,'std_sgl')" class="form-control  text-center fw-bold"
                            type=" text" placeholder="Tickets"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        <button ng-click="manup.ticket_pluse('std_sgl')"
                            class="btn  rounded-end-circle btn-bg-gradient"><i class="fa fa-plus text-white"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="price-item ">
                    <!-- <div class="tr-tag">
                        <i class="fa fa-star"></i>
                    </div> -->
                    <h4>Standerd Couple</h4>
                    <div class="pi-price">
                        <h2><span>₹</span>3499</h2>
                    </div>
                    <ul>
                        <li>Unlimited Happiness</li>
                        <li>Unlimited Food</li>
                        <li>One Large Drink</li>
                    </ul>
                    <!-- <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a> -->
                    <div class="input-group w-50 mx-auto my-3 ">
                        <button ng-click="manup.ticket_minus('std_cup')"
                            class="btn rounded-start-circle btn-bg-gradient"><i class="fa fa-minus text-white"
                                aria-hidden="true"></i></button>
                        <input ng-model="manup.std_cup_tickets"
                            ng-change="manup.number_of_ticket(manup.std_cup_tickets,'std_cup')" class="form-control text-center fw-bold"
                            type=" text" placeholder="Tickets"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        <button ng-click="manup.ticket_pluse('std_cup')"
                            class="btn  rounded-end-circle btn-bg-gradient"><i class="fa fa-plus text-white"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="price-item">
                    <h4>Primium single</h4>
                    <div class="pi-price">
                        <h2><span>₹</span>3999</h2>
                    </div>
                    <ul>
                        <li>Unlimited Happiness</li>
                        <li>Unlimited Food</li>
                        <li>Unlimited Drinks</li>
                    </ul>
                    <!-- <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a> -->
                    <div class="input-group w-50 mx-auto my-3 ">
                        <button ng-click="manup.ticket_minus('prim_sgl')"
                            class="btn rounded-start-circle btn-bg-gradient"><i class="fa fa-minus text-white"
                                aria-hidden="true"></i></button>
                        <input ng-model="manup.prim_sgl_tickets"
                            ng-change="manup.number_of_ticket(manup.prim_sgl_tickets,'prim_sgl')" class="form-control text-center fw-bold"
                            type=" text" placeholder="Tickets"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        <button ng-click="manup.ticket_pluse('prim_sgl')"
                            class="btn  rounded-end-circle btn-bg-gradient"><i class="fa fa-plus text-white"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="price-item">
                    <h4>Primium Couple</h4>
                    <div class="pi-price">
                        <h2><span>₹</span>6999</h2>
                    </div>
                    <ul>
                        <li>Unlimited Happiness</li>
                        <li>Unlimited Food</li>
                        <li>Unlimited Drinks</li>
                    </ul>
                    <div class="input-group w-50 mx-auto my-3 ">
                        <button ng-click="manup.ticket_minus('prim_cup')"
                            class="btn rounded-start-circle btn-bg-gradient"><i class="fa fa-minus text-white"
                                aria-hidden="true"></i></button>
                        <input ng-model="manup.prim_cup_tickets"
                            ng-change="manup.number_of_ticket(manup.prim_cup_tickets,'prim_cup')" class="form-control text-center fw-bold"
                            type=" text" placeholder="Tickets"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        <button ng-click="manup.ticket_pluse('prim_cup')"
                            class="btn  rounded-end-circle btn-bg-gradient"><i class="fa fa-plus text-white"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="price-item">
                    <h4>Kids</h4>
                    <div class="pi-price">
                        <h2><span>₹</span>999</h2>
                    </div>
                    <ul>
                        <li>Unlimited Happiness</li>
                        <li>Unlimited Food</li>
                        <li>Unlimited Drinks</li>
                    </ul>
                    <div class="input-group w-50 mx-auto my-3 ">
                        <button ng-click="manup.ticket_minus('kids')"
                            class="btn rounded-start-circle btn-bg-gradient"><i class="fa fa-minus text-white"
                                aria-hidden="true"></i></button>
                        <input ng-model="manup.kids_tickets"
                            ng-change="manup.number_of_ticket(manup.kids_tickets,'kids')" class="form-control text-center fw-bold"
                            type=" text" placeholder="Tickets"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        <button ng-click="manup.ticket_pluse('kids')"
                            class="btn  rounded-end-circle btn-bg-gradient"><i class="fa fa-plus text-white"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-8">
                <div class="price-item">
                    <h4>Entry Ticket</h4>
                    <div class="pi-price">
                        <h2><span>₹</span>999</h2>
                    </div>
                    <ul>
                        <li>Unlimited Happiness</li>
                        <li>Purchase your Food</li>
                        <li>Purchase your Drinks</li>
                    </ul>
                    <div class="input-group w-50 mx-auto my-3 ">
                        <button ng-click="manup.ticket_minus('entry')"
                            class="btn rounded-start-circle btn-bg-gradient"><i class="fa fa-minus text-white"
                                aria-hidden="true"></i></button>
                        <input ng-model="manup.entry_tickets"
                            ng-change="manup.number_of_ticket(manup.entry_tickets,'entry')" class="form-control text-center fw-bold"
                            type=" text" placeholder="Tickets"
                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        <button ng-click="manup.ticket_pluse('entry')"
                            class="btn  rounded-end-circle btn-bg-gradient"><i class="fa fa-plus text-white"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5">
            <button ng-click="manup.get_tickets()" class="btn primary-btn text-decoration-none">Get Ticket <span
                    class="arrow_right"></span></button>
        </div>
    </div>
</section>
