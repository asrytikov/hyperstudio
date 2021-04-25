$(window).load(function() {
    $(".preload").fadeOut("slow");
});

$(document).ready(function(){
    $('.bxslider').bxSlider({
        pager: false,
    });
});

//other

function mouseClick() {
    var obj = document.getElementById("aboutus");
    obj.scrollIntoView(true);
}

function effeciencyModal() {
document.getElementById("exampleModalLongTitle").innerHTML="Effeciency";
document.getElementById("modal-desc").innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus temporibus quasi sit incidunt numquam? Aliquam quos, ab unde ad perferendis veritatis commodi excepturi obcaecati nemo at necessitatibus alias a!";
}

function qualModal() {
    document.getElementById("exampleModalLongTitle").innerHTML="Cool quality";
    document.getElementById("modal-desc").innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus temporibus quasi sit incidunt numquam? Aliquam quos, ab unde ad perferendis veritatis commodi excepturi obcaecati nemo at necessitatibus alias a!";
    }

    function designModal() {
        document.getElementById("exampleModalLongTitle").innerHTML="Modern design";
        document.getElementById("modal-desc").innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus temporibus quasi sit incidunt numquam? Aliquam quos, ab unde ad perferendis veritatis commodi excepturi obcaecati nemo at necessitatibus alias a!";
        }

        function priceModal() {
            document.getElementById("exampleModalLongTitle").innerHTML="Good price";
            document.getElementById("modal-desc").innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus temporibus quasi sit incidunt numquam? Aliquam quos, ab unde ad perferendis veritatis commodi excepturi obcaecati nemo at necessitatibus alias a!";
            }

            function supModal() {
                document.getElementById("exampleModalLongTitle").innerHTML="Good support";
                document.getElementById("modal-desc").innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus temporibus quasi sit incidunt numquam? Aliquam quos, ab unde ad perferendis veritatis commodi excepturi obcaecati nemo at necessitatibus alias a!";
                }

                function safeModal() {
                    document.getElementById("exampleModalLongTitle").innerHTML="Best safety";
                    document.getElementById("modal-desc").innerHTML="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo ducimus temporibus quasi sit incidunt numquam? Aliquam quos, ab unde ad perferendis veritatis commodi excepturi obcaecati nemo at necessitatibus alias a!";
                    }

                    function redirectToOwnerVk() {
                        document.getElementById("exampleModalLongTitle").innerHTML="Are you sure?";
                        document.getElementById("modal-desc").innerHTML="You're about to redirect to other web-site page. If you're ready, please, confirm your action.";
                        }
                        $(document).ready(function(){
                            let filterList = {
                                init: function(){
                                    $('.workportfolio').mixitup({
                                        targetSelector: '.portfolio',
                                        filterSelector: '.filter',
                                        effects: ['fade'],
                                        easing: 'snap'
                                    });
                                },
                            };
                        filterList.init();
                        console.log(filterList);
                            $('.bxslider').bxSlider({
                                pager: false,
                            });
                            $('.bxslider-team').bxSlider({
                                pager: false,
                                controls: false
                            });
                            $('.accordion').accordion({
                                defaultOpen:''
                            });
                            
                            
                        });