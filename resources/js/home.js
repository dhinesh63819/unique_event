


const { default: axios } = require("axios");
const { each } = require("lodash");

var myApp = angular.module("myApp", []);

myApp.controller("MyController", [
    "$scope",
    function ($scope) {
        var manup = this;

        manup.std_sgl_tickets = 0;
        manup.std_cup_tickets = 0;
        manup.prim_sgl_tickets = 0;
        manup.prim_cup_tickets = 0;
        manup.kids_tickets = 0;
        manup.entry_tickets = 0;

        manup.init = (price_data) => {
            manup.price_details = price_data;
        };

        // Input Ticket Count

        manup.number_of_ticket = (current_value, ticket_type) => {
            if (ticket_type == "std_sgl") {
                manup.std_sgl_tickets = Number(current_value);
            } else if (ticket_type == "std_cup") {
                manup.std_cup_tickets = Number(current_value);
            } else if (ticket_type == "prim_sgl") {
                manup.prim_sgl_tickets = Number(current_value);
            } else if (ticket_type == "prim_cup") {
                manup.prim_cup_tickets = Number(current_value);
            } else if (ticket_type == "kids") {
                manup.kids_tickets = Number(current_value);
            } else if (ticket_type == "entry") {
                manup.entry_tickets = Number(current_value);
            }
        };

        // Input Minus Ticket Count

        manup.ticket_minus = (ticket_type) => {
            if (ticket_type == "std_sgl" && manup.std_sgl_tickets > 0) {
                manup.std_sgl_tickets -= 1;
            } else if (ticket_type == "std_cup" && manup.std_cup_tickets > 0) {
                manup.std_cup_tickets -= 1;
            } else if (
                ticket_type == "prim_sgl" &&
                manup.prim_sgl_tickets > 0
            ) {
                manup.prim_sgl_tickets -= 1;
            } else if (
                ticket_type == "prim_cup" &&
                manup.prim_cup_tickets > 0
            ) {
                manup.prim_cup_tickets -= 1;
            } else if (ticket_type == "kids" && manup.kids_tickets > 0) {
                manup.kids_tickets -= 1;
            } else if (ticket_type == "entry" && manup.entry_tickets > 0) {
                manup.entry_tickets -= 1;
            }
        };

        // Input Add Ticket Count

        manup.ticket_pluse = (ticket_type) => {
            if (ticket_type == "std_sgl") {
                manup.std_sgl_tickets += 1;
            } else if (ticket_type == "std_cup") {
                manup.std_cup_tickets += 1;
            } else if (ticket_type == "prim_sgl") {
                manup.prim_sgl_tickets += 1;
            } else if (ticket_type == "prim_cup") {
                manup.prim_cup_tickets += 1;
            } else if (ticket_type == "kids") {
                manup.kids_tickets += 1;
            } else if (ticket_type == "entry") {
                manup.entry_tickets += 1;
            }
        };

        // Get Ticktes Button Function

        manup.get_tickets = () => {
            if (
                manup.std_sgl_tickets > 0 ||
                manup.std_cup_tickets > 0 ||
                manup.prim_sgl_tickets > 0 ||
                manup.prim_cup_tickets > 0 ||
                manup.kids_tickets > 0 ||
                manup.entry_tickets > 0
            ) {
                manup.ticket_booking_uri = "ticket-booking?";
                manup.ticket_booking_params = "";
                if (manup.std_sgl_tickets > 0) {
                    manup.ticket_booking_params += `std_sgl=${manup.std_sgl_tickets}`;
                }
                if (manup.std_cup_tickets > 0) {
                    manup.ticket_booking_params +=
                        manup.ticket_booking_params == ""
                            ? `std_cup=${manup.std_cup_tickets}`
                            : `&std_cup=${manup.std_cup_tickets}`;
                }
                if (manup.prim_sgl_tickets > 0) {
                    manup.ticket_booking_params +=
                        manup.ticket_booking_params == ""
                            ? `prim_sgl=${manup.prim_sgl_tickets}`
                            : `&prim_sgl=${manup.prim_sgl_tickets}`;
                }
                if (manup.prim_cup_tickets > 0) {
                    manup.ticket_booking_params +=
                        manup.ticket_booking_params == ""
                            ? `prim_cup=${manup.prim_cup_tickets}`
                            : `&prim_cup=${manup.prim_cup_tickets}`;
                }
                if (manup.kids_tickets > 0) {
                    manup.ticket_booking_params +=
                        manup.ticket_booking_params == ""
                            ? `kids=${manup.kids_tickets}`
                            : `&kids=${manup.kids_tickets}`;
                }
                if (manup.entry_tickets > 0) {
                    manup.ticket_booking_params +=
                        manup.ticket_booking_params == ""
                            ? `entry=${manup.entry_tickets}`
                            : `&entry=${manup.entry_tickets}`;
                }
                location.href = `${manup.ticket_booking_uri}${manup.ticket_booking_params}`;
            } else {
                alert("select a ticket");
            }
        };

        /***************************** input Validation *************************************/

        manup.userNameError = "";
        manup.userMobileError = "";
        manup.userEmailError = "";
        manup.userPasswordError = "";
        manup.userCnfmPasswordError = "";
        manup.userDobError = "";
        manup.contact_emailError = "";
        manup.contactUsMessageError = "";

        const validateEmail = (email) => {
            return String(email)
                .toLowerCase()
                .match(
                    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
        };

        manup.userNameInput = () => {
            if (manup.userName.length > 0) {
                manup.userNameError = "";
            } else {
                manup.userNameError = "This Fild Is Required";
                return;
            }
        };
        manup.userDobInput = () => {
            if (manup.userDob != null) {
                manup.userDobError = "";
            } else {
                manup.userDobError = "This Fild Is Required";
                return;
            }
        };

        manup.userMobileInput = () => {
            if (manup.userMobile.length > 0) {
                if (manup.userMobile.length != 10) {
                    manup.userMobileError = "Enter Vaild Mobile Number";
                    return;
                } else {
                    manup.userMobileError = "";
                }
            } else {
                manup.userMobileError = "This Fild Is Required";
                return;
            }
        };

        manup.userEmailInput = () => {
            if (manup.userEmail.length > 0) {
                if (!validateEmail(manup.userEmail)) {
                    manup.userEmailError = "Enter Vaild Email Address";
                    return;
                } else {
                    manup.userEmailError = "";
                }
            } else {
                manup.userEmailError = "This Fild Is Required";
                return;
            }
        };

        manup.userPasswordInput = () => {
            if (manup.userPassword.length > 0) {
                if (manup.userPassword.length < 8) {
                    manup.userPasswordError =
                        "Password is minimum 8 characters";
                    return;
                } else {
                    manup.userPasswordError = "";
                }
            } else {
                manup.userPasswordError = "This Fild Is Required";
                return;
            }
        };

        manup.userCnfmPasswordInput = () => {
            if (manup.userCnfmPassword.length > 0) {
                if (manup.userPassword != manup.userCnfmPassword) {
                    manup.userCnfmPasswordError =
                        "password & confirm passowrd is not match";
                } else {
                    manup.userCnfmPasswordError = "";
                }
            } else {
                manup.userCnfmPasswordError = "This Fild Is Required";
                return;
            }
        };

        /*************************** Contact US message Input *********************/

        manup.contactUsMessageInput = () => {
            if (manup.contactUsMessage.length > 0) {
                manup.contactUsMessageError = "";
            } else {
                manup.contactUsMessageError = "This Fild Is Required";
                return;
            }
        };

        manup.contact_email_input = () => {
            if (manup.contact_email.length > 0) {
                if (!validateEmail(manup.contact_email)) {
                    manup.contact_emailError = "Enter Vaild Email Address";
                    return;
                } else {
                    manup.contact_emailError = "";
                }
            } else {
                manup.contact_emailError = "This Fild Is Required";
                return;
            }
        };
        manup.contact_mobile_input = () => {
            if (manup.contact_mobile.length > 0) {
                if (manup.contact_mobile.length != 10) {
                    manup.contact_mobileError = "Enter Vaild Mobile Number";
                    return;
                } else {
                    manup.contact_mobileError = "";
                }
            } else {
                manup.contact_mobileError = "This Fild Is Required";
                return;
            }
        };

        /***************************** Register Form submite*************************************/

        manup.registerSubmit = async (event) => {
            event.preventDefault();

            if (manup.userName == null) {
                manup.userNameError = "This Fild Is Required";
            }
            if (manup.userMobile == null) {
                manup.userMobileError = "This Fild Is Required";
            }
            if (manup.userEmail == null) {
                manup.userEmailError = "This Fild Is Required";
            }
            if (manup.userPassword == null) {
                manup.userPasswordError = "This Fild Is Required";
            }
            if (manup.userDob == null) {
                manup.userDobError = "This Fild Is Required";
            }
            if (manup.userCnfmPassword == null) {
                manup.userCnfmPasswordError = "This Fild Is Required";
            }
            if (manup.userPassword != manup.userCnfmPassword) {
                manup.userCnfmPasswordError = "Password dosn't match";
            }

            if (
                manup.userName != null &&
                manup.userMobile != null &&
                manup.userEmail != null &&
                manup.userPassword != null &&
                manup.userDob != null &&
                manup.userCnfmPassword != null
            ) {
                let date_of_birth = new Date(manup.userDob);
                manup.registerData = {
                    user_name: manup.userName,
                    user_mobile: manup.userMobile,
                    user_email: manup.userEmail,
                    user_password: manup.userPassword,
                    user_dob: `${date_of_birth.getDate()}-${
                        date_of_birth.getMonth() + 1
                    }-${date_of_birth.getFullYear()}`,
                    user_address: manup.userAddress,
                };
                $("#register_btn").attr("disabled", "disabled");
                $("#register_btn").addClass("opacity-75");
                $("#register_spinner").removeClass("d-none");
                $("#register_text").addClass("visually-hidden");
                await axios
                    .post("/register", manup.registerData)
                    .then((res) => {
                        const { message, status } = res.data;
                        if (status) {
                            alert(message);
                            location.href = "/login";
                        } else {
                            alert(message);
                        }
                        $("#register_btn").removeAttr("disabled");
                        $("#register_btn").removeClass("opacity-75");
                        $("#register_spinner").addClass("d-none");
                        $("#register_text").removeClass("visually-hidden");
                    });
            }
        };

        /***************************** Login Form *************************************/
        manup.loginSubmit = async (event) => {
            event.preventDefault();

            if (manup.userEmail == null) {
                manup.userEmailError = "This Fild Is Required";
            }
            if (manup.userPassword == null) {
                manup.userPasswordError = "This Fild Is Required";
            }
            if (manup.userEmail != null && manup.userPassword != null) {
                manup.registerData = {
                    user_email: manup.userEmail,
                    user_password: manup.userPassword,
                };

                $("#login_btn").attr("disabled", "disabled");
                $("#login_btn").addClass("opacity-75");
                $("#login_spinner").removeClass("d-none");
                $("#login_text").addClass("visually-hidden");

                await axios.post("/login", manup.registerData).then((res) => {
                    const { message, status } = res.data;
                    if (status) {
                        location.href = "/";
                    } else {
                        alert(message);
                    }

                    $("#login_btn").removeAttr("disabled");
                    $("#login_btn").removeClass("opacity-75");
                    $("#login_spinner").addClass("d-none");
                    $("#login_text").removeClass("visually-hidden");
                });
            }
        };

        /*********************** Booking Page ******************************/

        manup.get_details = () => {
            manup.package_ticket_number = [
                {
                    name: "standerd_single",
                    count: manup.stander_sigle_count,
                    check_in_details: [],
                },
                {
                    name: "standerd_couple",
                    count: manup.stander_couple_count,
                    check_in_details: [],
                },
                {
                    name: "primium_single",
                    count: manup.premium_sigle_count,
                    check_in_details: [],
                },
                {
                    name: "primium_couple",
                    count: manup.premium_copule_count,
                    check_in_details: [],
                },
                {
                    name: "kids",
                    count: manup.kids_count,
                    check_in_details: [],
                },
                {
                    name: "entry",
                    count: manup.entry_tickets,
                    check_in_details: [],
                },
            ];
            // manup.all_name_input = [];
            // manup.all_age_input = [];
            // manup.all_gender_input = [];

            // manup.data = [];

            // $("input[name='name']").each(function () {
            //     let value = $(this).val();
            //     manup.all_name_input.push(value);
            // });

            // $("input[name='age']").each(function () {
            //     let value = $(this).val();
            //     manup.all_age_input.push(value);
            // });

            // $(".gender:checked").each(function () {
            //     let value = $(this).val();
            //     manup.all_gender_input.push(value);
            // });

            // manup.all_name_input.forEach((item, index) => {
            //     manup.data.push({
            //         name: item,
            //         age: manup.all_age_input[index],
            //         gender: manup.all_gender_input[index],
            //         check_status: false,
            //         check_in_time: null,
            //     });
            // });

            // manup.person_price_wise = [];
            // let startIndex = 0; // To track the starting index for slicing
            // manup.package_ticket_number.forEach((item, index) => {
            //     if (item.count > 0) {
            //         let persons = manup.data.slice(
            //             startIndex,
            //             startIndex + item.count
            //         ); // Slice the array based on length from b
            //         startIndex += item.count; // Update the starting index for the next slice

            //         manup.person_price_wise.push({
            //             price_package: item.name,
            //             persons,
            //         });
            //     }
            // });
            manup.package_ticket_number = manup.package_ticket_number.filter(
                (item) => {
                    return item.count > 0;
                }
            );
            $.each(manup.package_ticket_number, (index, item) => {
                for (let i = 0; i < item.count; i++) {
                    item.check_in_details.push({
                        name: `preson_${i + 1}`,
                        check_in_status: false,
                        check_in_time: null,
                    });
                }
            });

            // for (let index = 0; index < manup.data.length; index++) {
            //     const element = manup.data[index];
            //     if (
            //         element.name === null ||
            //         element.name === "" ||
            //         element.name === undefined
            //     ) {
            //         alert("Enter all name field ");
            //         return;
            //     }

            //     if (
            //         element.age === null ||
            //         element.age === "" ||
            //         element.age === undefined
            //     ) {
            //         alert("Enter all age field ");
            //         return;
            //     }

            //     if (
            //         element.gender === null ||
            //         element.gender === "" ||
            //         element.gender === undefined
            //     ) {
            //         alert("Select all gender field ");
            //         return;
            //     }
            // }

            // Email Validation
            if (
                manup.contact_email.length == 0 ||
                !validateEmail(manup.contact_email)
            ) {
                manup.contact_emailError = "Enter Vaild Email Address";
                alert("Enter Vaild Email Address");
                return;
            }
            // Mobile validation
            if (
                manup.contact_mobile.length == 0 ||
                manup.contact_mobile.length != 10
            ) {
                manup.contact_mobileError = "Enter Vaild Mobile Number";
                alert("Enter Vaild Mobile Number");
                return;
            }

            manup.pricing_page = true;
        };

        /*********************** Ticket Booking proccess ******************************/
        function generateRandomString() {
            return (
                Date.now().toString(36) +
                Math.random().toString(36).substr(2, 9)
            ).toUpperCase();
        }
        let ticket_code = generateRandomString();
        manup.book_ticket = async () => {
            $("#booking_continue_btn").addClass("disabled");
            $("#booking_continue_spinner").removeClass("d-none");
            $("#booking_continue_text").addClass("visually-hidden");

            let options = {
                type: "canvas",
                shape: "square",
                width: 300,
                height: 300,
                data: `${window.location.origin}/admin/ticket/${ticket_code}`,
                margin: 0,
                qrOptions: {
                    typeNumber: "0",
                    mode: "Byte",
                    errorCorrectionLevel: "Q",
                },
                imageOptions: {
                    saveAsBlob: true,
                    hideBackgroundDots: false,
                    imageSize: 0.9,
                    margin: 1,
                },
                dotsOptions: {
                    type: "dots",
                    color: "#000000",
                    roundSize: true,
                },
                backgroundOptions: {
                    round: 0,
                    color: "#ffffff",
                },
                dotsOptionsHelper: {
                    colorType: {
                        single: true,
                        gradient: false,
                    },
                    gradient: {
                        linear: true,
                        radial: false,
                        color1: "#6a1a4c",
                        color2: "#6a1a4c",
                        rotation: "0",
                    },
                },
                cornersSquareOptions: {
                    type: "dot",
                    color: "#000000",
                },
                cornersSquareOptionsHelper: {
                    colorType: {
                        single: true,
                        gradient: false,
                    },
                    gradient: {
                        linear: true,
                        radial: false,
                        color1: "#000000",
                        color2: "#000000",
                        rotation: "0",
                    },
                },
                cornersDotOptions: {
                    type: "dot",
                    color: "#000000",
                },
                cornersDotOptionsHelper: {
                    colorType: {
                        single: true,
                        gradient: false,
                    },
                    gradient: {
                        linear: true,
                        radial: false,
                        color1: "#000000",
                        color2: "#000000",
                        rotation: "0",
                    },
                },
                backgroundOptionsHelper: {
                    colorType: {
                        single: true,
                        gradient: false,
                    },
                    gradient: {
                        linear: true,
                        radial: false,
                        color1: "#ffffff",
                        color2: "#ffffff",
                        rotation: "0",
                    },
                },
                // image: "data:image/png",
            };

            // Qrcode Generate
            const qrCode = new QRCodeStyling(options);

            qrCode.append(document.getElementById("canvas"));
            manup.ticket_price_details = manup.ticket_price_quantity.filter(
                (item) => {
                    return item.quantity > 0;
                }
            );
            manup.promo_code_details = {
                promo_code: manup.promocode,
                percentage: manup.promo_percentage,
                discount_value: manup.promo_percentage_value,
            };
            manup.ticket_details = {
                // person_details: manup.person_price_wise,
                person_details: manup.package_ticket_number,
                number_of_ticket: manup.total_number_of_ticket,
                contact_email: manup.contact_email,
                contact_mobile: manup.contact_mobile,
                price_details: manup.ticket_price_details,
                total_amount: manup.total_amount,
                promo_code:
                    manup.promocode != null && manup.promo_status
                        ? manup.promo_code_details
                        : null,
                ticket_code,
            };

            qrCode.getRawData("png").then(async (blob) => {
                manup.qrcode_png = blob;

                const formData = new FormData();
                formData.append("file", manup.qrcode_png, "qr-code.png");
                formData.append(
                    "ticket_details",
                    JSON.stringify(manup.ticket_details)
                );

                await axios.post("/ticket-booking", formData).then((res) => {
                    const { message, status, ticket_code } = res.data;
                    if (status) {
                        location.href = `/booked_ticket_details/${ticket_code}`;
                    } else {
                        alert(message);
                    }

                    $("#booking_continue_btn").removeClass("disabled");
                    $("#booking_continue_spinner").addClass("d-none");
                    $("#booking_continue_text").removeClass("visually-hidden");
                });
            });
        };

        /*********************** ADMIN TICKET PAGE ******************************/

        manup.ticket_init = (data) => {
            manup.ticket_person = JSON.parse(data.person_details);
            manup.titket_number = data.number_of_ticket;
            manup.ticket_contact_email = data.contact_email;
            manup.ticket_contact_mobeil = data.contact_mobile;
        };

        manup.checkin_btn = (pricePackage, check_in_index) => {
            manup.check_in_person = manup.ticket_person.find((element) => {
                return element.name == pricePackage;
            });

            $.each(manup.check_in_person["check_in_details"], (index, item) => {
                if (index == check_in_index) {
                    item.check_in_time = new Date().toLocaleString();
                    item.check_in_status = true;
                }
            });
        };

        manup.checked_in_submit = async (ticket_code) => {
            let data = {
                ticket_code,
                updated_persons: manup.ticket_person,
            };
            await axios.post("/checked_in", data).then((res) => {
                const { message, status, data } = res.data;
                alert(message);
                if (status) {
                    location.reload();
                }
            });
        };
        //  whos_speak Datas
        manup.whos_speak = [
            {
                name: "AZHAR",
                designation: "ANCHOR",
                image: "img/team-member/azhar1.webp",
                instagram_id: "https://www.instagram.com/azhar__official/",
                about: "Azhar is an Indian actor and television host who has appeared in Tamil language films. After making his film debut in the Tamil film Ninaithathu Yaaro (2014)...",
                more_link: "https://en.wikipedia.org/wiki/Azhar_(actor)",
            },
            {
                name: "FARINA",
                designation: "ANCHOR",
                image: "img/team-member/farina.webp",
                instagram_id: "https://www.instagram.com/farina_azad_official/",
                about: "She started her career as a television presenter and worked in TV channels like Vijay TV, Sun TV, Zee Tamil and Raj TV. She has appeared in TV shows such as Kitchen Galatta,...",
                more_link:
                    "https://en.wikipedia.org/wiki/Farina_Azad#:~:text=She%20started%20her%20career%20as,which%20aired%20on%20Sun%20TV.",
            },
            {
                name: "VIGNESH PRABU",
                designation: "MAGICIAN",
                image: "img/team-member/vignesh_prabu.webp",
                instagram_id:
                    "https://www.instagram.com/magician_vigneshprabhu/",
                about: "Vignesh Prabhu is an international magician & mentalist from Coimbatore. Working for his passion of entertaining the audience for 15 years in the field of magic & mentalism,...",
                more_link: "https://www.magicvignesh.com/aboutus",
            },
            {
                name: "BALA",
                designation: "COMEDIAN",
                image: "img/team-member/bala.webp",
                instagram_id: "https://www.instagram.com/bjbala_kpy/",
                about: "In 2017, he competed in Kalakka Povadhu Yaaru Season 6 and winning the show, after having been eliminated and saved by Priyanka Deshpande, who advocated...",
                more_link: "https://en.wikipedia.org/wiki/KPY_Bala",
            },
            {
                name: "VINOTH",
                designation: "COMEDIAN",
                image: "img/team-member/vinoth.webp",
                instagram_id: "https://www.instagram.com/azhar__official/",
                about: "KPY Vinoth is an Indian film artist, who has worked predominantly in the Tamil movie industry.",
                more_link:
                    "https://www.google.com/search?sca_esv=c7c67eb20f0b5775&rlz=1C1ONGR_enIN1135IN1135&sxsrf=ADLYWIIl5wccazxKzKGJ4h2EFy2m_52aTQ:1734704016985&q=Kpy+Vinoth&si=ACC90nwLLwns5sISZcdzuISy7t-NHozt8Cbt6G3WNQfC9ekAgJBC6-aqqOVxT5E--Q0BR75zEaMr62RQqA2T9hofGN0CKKLkUQ%3D%3D&sa=X&ved=2ahUKEwiO6-OFxLaKAxVrTGwGHajtEFYQ-pgMegQIBhAB&biw=1920&bih=911&dpr=1",
            },
            {
                name: "VIGNESH SHIVA",
                designation: "COMEDIAN",
                image: "img/team-member/vicky_siva.webp",

                instagram_id: "https://www.instagram.com/vicky_shiva_kpy/",
                about: "Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper",
                more_link: "",
            },
            {
                name: "DJ GANDHI",
                designation: "DJ",
                image: "img/team-member/dj_gandhi.webp",

                instagram_id: "https://www.instagram.com/djgandhivijay/",
                about: "Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper",
                more_link: "",
            },
            {
                name: "NJ NISHANTH",
                designation: "SINGER",
                image: "img/team-member/nishanth.webp",

                instagram_id: "https://www.instagram.com/nj_nishanthmusic/",
                about: "Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper",
                more_link: "",
            },
            {
                name: "MR GO",
                designation: "SINGER",
                image: "img/team-member/mr-go.webp",

                // instagram_id: "https://www.instagram.com/nj_nishanthmusic/",
                about: "Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper",
                more_link: "",
            },
            {
                name: "MRS GO",
                designation: "SINGER",
                image: "img/team-member/mrs-go.webp",

                // instagram_id: "https://www.instagram.com/nj_nishanthmusic/",
                about: "Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper",
                more_link: "",
            },
            {
                name: "Assan nidheesh",
                designation: "Drummer",
                image: "img/team-member/drummer.webp",

                // instagram_id: "https://www.instagram.com/nj_nishanthmusic/",
                about: "Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper",
                more_link: "",
            },
            {
                name: "Apj Arun",
                designation: "Dancer",
                image: "img/team-member/assan_nidheesh.webp",

                // instagram_id: "https://www.instagram.com/nj_nishanthmusic/",
                about: "Businesses often become known today through effective marketing. The marketing may be in the form of a regular news item or half column society news in the Sunday newspaper",
                more_link: "",
            },
            {
                name: "Riya thiyagarajan",
                designation: "insta",
                image: "img/team-member/riya.webp",

                instagram_id:
                    "https://www.instagram.com/riya_thiyagarajan/?hl=en",
                about: "Rita Thyagarajan alias Sucharitha Thyagarajan (born 10 June 1984), known by the mononym Rita, is an Indian playback singer who sings in Tamil, Telugu, Hindi, English, ",
                more_link: "https://en.wikipedia.org/wiki/Rita_Thyagarajan",
            },
        ];
        //  schedule_plan Datas

        manup.schedule_plan = [
            {
                image: "img/schedule/inauguration.jpg",
                schedule_name: "inauguration",
                start_timing: "06.00 pm",
                end_timing: "06.30 pm",
            },
            {
                image: "img/team-member/dj_gandhi.webp",
                schedule_name: "dj gandhi",
                start_timing: "06.30 pm",
                end_timing: "07.00 pm",
            },
            {
                image: "img/team-member/mr-go.webp",
                schedule_name: "mr & mrs gopi",
                start_timing: "07.00 pm",
                end_timing: "07.30 pm",
            },
            {
                image: "img/schedule/dance.webp",
                schedule_name: "dance",
                start_timing: "07.30 pm",
                end_timing: "08.00 pm",
            },
            {
                image: "img/team-member/nishanth.webp",
                schedule_name: "nj nishanth",
                start_timing: "08.00 pm",
                end_timing: "08.30 pm",
            },
            {
                image: "img/team-member/vignesh_prabu.webp",
                schedule_name: "magician",
                start_timing: "08.30 pm",
                end_timing: "09.15 pm",
            },
            {
                image: "img/schedule/dance1.webp",
                schedule_name: "dance",
                start_timing: "09.15 pm",
                end_timing: "09.45 pm",
            },
            {
                image: "img/team-member/mrs-go.webp",
                schedule_name: "mr & mrs gopi & nj nishanth",
                start_timing: "09.45 pm",
                end_timing: "10.15 pm",
            },
            {
                image: "img/team-member/bala.webp",
                schedule_name: "bala & team",
                start_timing: "10.15 pm",
                end_timing: "11.00 pm",
            },
            {
                image: "img/schedule/game.webp",
                schedule_name: "game show",
                start_timing: "11.00 pm",
                end_timing: "11.45 pm",
            },
            {
                image: "img/team-member/dj_gandhi.webp",
                schedule_name: "dj gandhi",
                start_timing: "11.45 pm",
                end_timing: "12.30 am",
            },
        ];

        /*************************** Contact US  *********************/

        manup.contactUsSendBtn = async (event) => {
            event.preventDefault();

            if (manup.userName == null) {
                manup.userNameError = "This Fild Is Required";
            }
            if (manup.userMobile == null) {
                manup.userMobileError = "This Fild Is Required";
            }
            if (manup.userEmail == null) {
                manup.userEmailError = "This Fild Is Required";
            }
            if (
                manup.contactUsMessage == null ||
                manup.contactUsMessage == undefined
            ) {
                manup.contactUsMessageError = "This Fild Is Required";
            }

            if (
                manup.userName != null &&
                manup.userMobile != null &&
                manup.contactUsMessage != null &&
                manup.userEmail != null
            ) {
                $("#contact_us_btn").attr("disabled", "disabled");
                $("#contact_us_btn").addClass("opacity-75");
                $("#contact_us_spinner").removeClass("d-none");
                $("#contact_us_text").addClass("visually-hidden");

                manup.registerData = {
                    user_name: manup.userName,
                    user_mobile: manup.userMobile,
                    user_email: manup.userEmail,
                    user_message: manup.contactUsMessage,
                };
                await axios
                    .post("/contact_us", manup.registerData)
                    .then((res) => {
                        const { message, status } = res.data;
                        if (status) {
                            alert(message);
                            manup.userName = null;
                            manup.userMobile = null;
                            manup.userEmail = null;
                            manup.contactUsMessage = null;
                        } else {
                            alert(message);
                        }
                        $("#contact_us_btn").removeAttr("disabled", "disabled");
                        $("#contact_us_btn").removeClass("opacity-75");
                        $("#contact_us_spinner").addClass("d-none");
                        $("#contact_us_text").removeClass("visually-hidden");
                    });
                $scope.$apply();
            }
        };

        /**************************** Book Ticket *******************/
        manup.ticket_price = [
            {
                name: "std_sgl",
                price: "1999",
            },
            {
                name: "std_cup",
                price: "3499",
            },
            {
                name: "prim_sgl",
                price: "3999",
            },
            {
                name: "prim_cup",
                price: "6999",
            },
            {
                name: "kids",
                price: "999",
            },
            {
                name: "entry",
                price: "999",
            },
        ];
        manup.bookingInit = (ticket_count_array) => {
            manup.all_ticket_details = [];
            manup.all_ticket_details.push(ticket_count_array);

            manup.ticket_price_quantity = manup.ticket_price.map((item) => {
                return {
                    name: item.name,
                    price: item.price,
                    quantity: manup.all_ticket_details[0][item.name] || "0", // Default to 0 if not in b
                    total:
                        item.price *
                        (parseInt(manup.all_ticket_details[0][item.name]) || 0), // Calculate total price
                };
            });
            manup.total_price = manup.ticket_price_quantity.reduce(
                (sum, item) => sum + item.total,
                0
            );
            manup.total_price_tax = (18 / 100) * manup.total_price;
            manup.total_amount = (
                manup.total_price + manup.total_price_tax
            ).toFixed(2);
        };

        /****************************** Promo Code ************************************/

        manup.promo_status = false;
        manup.promo_percentage_value = 0;
        manup.promo_percentage = 0;
        manup.promocode_btn = async () => {
            if (manup.promocode != null && manup.promocode != "") {
                $("#promo_btn").attr("disabled", "disabled");
                $("#promo_btn").addClass("opacity-75");
                $("#promo_spinner").removeClass("d-none");
                $("#promo_text").addClass("visually-hidden");

                $("#booking_continue_btn").addClass("disabled");
                await axios
                    .post("/check-promocode", { promo: manup.promocode })
                    .then((res) => {
                        const { message, status, data } = res.data;

                        manup.promo_status = status;

                        if (status) {
                            $("#promoCodeInput").attr("disabled", "disabled");
                            manup.promo_percentage = `${data.percentage}%`;
                            manup.promo_percentage_value = (
                                (data.percentage / 100) *
                                manup.total_amount
                            ).toFixed(2);

                            manup.total_amount = (
                                manup.total_amount -
                                manup.promo_percentage_value
                            ).toFixed(2);
                        } else {
                            manup.promo_percentage_value = 0;
                            alert(message);
                        }
                        $("#promo_btn").removeAttr("disabled", "disabled");
                        $("#promo_btn").removeClass("opacity-75");
                        $("#promo_spinner").addClass("d-none");
                        $("#promo_text").removeClass("visually-hidden");
                        $("#booking_continue_btn").removeClass("disabled");
                    });
                $scope.$apply();
            }
        };

        /****************************** Promo Cancel btn ************************************/

        manup.promocode_cancel_btn = () => {
            manup.total_amount = (
                Number(manup.total_amount) +
                Number(manup.promo_percentage_value)
            ).toFixed(2);
            manup.promocode = null;
            manup.promo_status = false;
            $("#promoCodeInput").removeAttr("disabled");
        };

        /******************************* Forget Password ******************************/

        manup.forgetPassword = async (event) => {
            event.preventDefault();
            if (manup.userEmail == null) {
                manup.userEmailError = "This Fild Is Required";
                return;
            }

            await axios
                .post("/forgot-password", { email: manup.userEmail })
                .then((res) => {
                    const { message, status, data } = res.data;

                    if (status) {
                        manup.userEmailMessage = message;
                        setTimeout(() => {
                            manup.userEmailMessage = "";
                            location.reload();
                        }, 2500);
                    } else {
                        manup.userEmailError = message;
                        // alert(message);
                    }
                    $scope.$apply();
                });
        };

        /******************************* Reset Password ******************************/

        manup.resetPassword = async (event) => {
            event.preventDefault();

            if (manup.userEmail == null) {
                manup.userEmailError = "This Fild Is Required";
            }
            if (manup.userPassword == null) {
                manup.userPasswordError = "This Fild Is Required";
            }
            if (manup.userCnfmPassword == null) {
                manup.userCnfmPasswordError = "This Fild Is Required";
            }

            if (
                manup.userEmail != null &&
                manup.userPassword != null &&
                manup.userCnfmPassword != null &&
                manup.userPassword == manup.userCnfmPassword
            ) {
                let data = {
                    email: manup.userEmail,
                    token: manup.reset_token,
                    password: manup.userPassword,
                    password_confirmation: manup.userCnfmPassword,
                };
                await axios.post("/reset-password", data).then((res) => {
                    const { message, status, data, alertMeaasge } = res.data;

                    if (status) {
                        manup.userEmailMessage = message;
                        setTimeout(() => {
                            manup.userEmailMessage = "";
                            location.href = "/";
                        }, 2000);
                    } else {
                        manup.userEmailError = message;
                        if (alertMeaasge != null) {
                            alert(alertMeaasge);
                        }
                    }
                });
                $scope.$apply();
            }
        };


    },
]);
