function Product(id, name, description, img, slug, price, cant) {
    var self = this;
    self.id = id;
    self.name = name;
    self.description = description;
    self.img = img;
    self.slug = slug;
    self.price = Number(price.replace(/[^0-9.-]+/g, ""));
    self.cant = ko.observable(cant);
    self.total = ko.computed(function () {
        changeCantidad(self.id, self.cant());
        return self.cant() * self.price;
    });
    self.removeCart = function () {
        removeCart(this);
    };
}


function ProductVM() {
    var self = this;
    self.lproducts = ko.observableArray([]);


    self.checkout = ko.observable(false);
    var lcart = listCart();
    self.lproducts($.map(lcart, function (prod) {
        return new Product(prod.id, prod.name, prod.description, prod.img, prod.slug, prod.price, prod.cantidad);
    }));


    self.total = ko.computed(function () {
        var total = 0;
        $.each(self.lproducts(), function (p, producto) {
            total += parseFloat(producto.total());
        });
        return "$ " + total;
    });
    self.emptyCart = function () {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                self.lproducts([]);
                clearCart();
            }
        });
    };
    self.remove = function (producto) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                producto.removeCart();
                self.lproducts.remove(producto);
            }
        });

    };

    self.proceed = function () {
        self.checkout(true);
    };

}




var oPVM;
var frValidate;
function init_products() {
    oPVM = new ProductVM();
    ko.applyBindings(oPVM);

    frValidate = $("#frmCheckOut").validate({
        rules: {
            firstname: {
                required: true,
                maxlength: 50
            },
            lastname: {
                required: true,
                maxlength: 50
            },
            email: {
                required: true,
                email: true
            },
            company: {
                maxlength: 50
            },
            address_one: {
                required: true,
                maxlength: 100
            },
            address_two: {
                maxlength: 100
            },
            country: {
                required: true,
                maxlength: 100
            },
            state: {
                required: true,
                maxlength: 100
            },
            zipcode: {
                required: true,
                digits: true
            },
            city: {
                required: true,
                maxlength: 100
            },
            phone: {
                required: true,
                maxlength: 100
            },
            fax: {
                maxlength: 100
            },
            payment_name: {
                required: function (element) {
                    return $("#payment_card").is(":checked");
                },
                maxlength: 100
            },
            payment_state: {
                required: function (element) {
                    return $("#payment_card").is(":checked");
                }
            },
            cc_number: {
                required: function (element) {
                    return $("#payment_card").is(":checked");
                },
                maxlength: 100
            },
            cc_exp_month: {
                required: function (element) {
                    return $("#payment_card").is(":checked");
                },
                maxlength: 100
            },
            cc_exp_year: {
                required: function (element) {
                    return $("#payment_card").is(":checked");
                },
                maxlength: 100
            },
            cc_cvv: {
                required: function (element) {
                    return $("#payment_card").is(":checked");
                },
                maxlength: 100
            }
        }
    });
}


function saveChecout() {
    if ($("#frmCheckOut").valid()) {
        document.getElementById("frmCheckOut").reset();
        oPVM.lproducts([]);
        clearCart();
        Swal.fire("Success!!");
    }
}