function Product(id, name, description, img, slug, price) {
    var self = this;
    self.id = id;
    self.name = name;
    self.description = description;
    self.img = img;
    self.slug = slug;
    self.price = price;
    self.cantidad=1;
    self.addCart = function () {
        addCart(this);
    };    
}

function ProductVM() {
    var self = this;
    self.lproducts = ko.observableArray([]);
    self.last_products = ko.observableArray();
    axios.get('/api/media/').then(function (response) {
        if (response.data.products) {
            try {
                self.lproducts($.map(response.data.products, function (prod) {
                    return new Product(prod.id, prod.name, prod.description, prod.img, prod.slug, prod.price);
                }));
            } catch (e) {

            }

        }
    }).catch(function (error) {});
    $('#preloader2').fadeOut(1000, function () {
        $('#preloader2').remove();
    });
}




var oPVM;
function init_products() {
    oPVM = new ProductVM();
    ko.applyBindings(oPVM);
}