package javabackend.example.javabackend.controllers;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.multipart.MultipartFile;

import javabackend.example.javabackend.repositories.ProductsRepository;
import javabackend.example.javabackend.Service.ProductsService;
import javabackend.example.javabackend.models.Products;

import java.io.IOException;
import java.io.InputStream;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.nio.file.StandardCopyOption;
import java.util.List;
import org.springframework.ui.Model;
import org.springframework.util.StringUtils;

@Controller
public class ProductsController {



    private ProductsService productsService;

    public ProductsController(ProductsService productsService){
        super();
        this.productsService = productsService;
    }


    @GetMapping("/products")

    public String listProducts(Model model){
       model.addAttribute("products", productsService.getAllProducts());
       return "Products-Page";

    

    }

    @GetMapping("/products/new")

    public String createProductForm(Model model){
        Products product = new Products();
        model.addAttribute("products", product);
        return "Create-product";
        
    }
   

    @PostMapping("/products")
    public String saveProduct(@ModelAttribute(name = "products") Products products, @RequestParam("imgUpload") MultipartFile multipartFile) throws IOException{


        String fileName = StringUtils.cleanPath(multipartFile.getOriginalFilename());
        products.setImg(fileName);
        Products savedProduct = productsService.saveProduct(products);
        String uploadDirectory = "../Zeeshan/Website/public/productImages";
        Path uploadPath = Paths.get(uploadDirectory);
        if(!Files.exists(uploadPath)){
            Files.createDirectories(uploadPath);
        }
        


        try(InputStream inputStream = multipartFile.getInputStream()){

        Path filePath = uploadPath.resolve(fileName);
        Files.copy(inputStream, filePath, StandardCopyOption.REPLACE_EXISTING);

        } catch(IOException e){
            throw new IOException("Could not save uploaded file " + fileName);
        }
        
        
        
        return "redirect:/products";

    }

    @GetMapping("/products/{id}")
    public String deleteProduct(@PathVariable Integer id ){
        productsService.deleteProductById(id);
        return "redirect:/products";
        

    }

    @GetMapping("/products/edit/{id}")
    public String editProductForm(@PathVariable Integer id, Model model){
        model.addAttribute("products", productsService.getProductById(id));
        return "Update-product";
    }

    @PostMapping("/products/{id}")
    public String updateProduct(@PathVariable Integer id, @ModelAttribute("products") Products products, Model model){
        Products preexistingProduct = productsService.getProductById(id);

        preexistingProduct.setStock(products.getStock());

        productsService.updateProduct(preexistingProduct);

        return "redirect:/products";

    }
    
}
