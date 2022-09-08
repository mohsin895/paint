<html >
  
  <body >
  <table width="700px">
    <tr><td>&nbsp;</td><tr>
      <tr><td><img  src="<?php echo $message->embed(public_path().'/assets/images/setting/'.$gs->site_logo); ?>"><td><tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>{{$userDetails['name']}} </td></tr>
        <table width="700px" border="0" cellpading="0" cellspacing="0">
    
      <tr>
      <td>  </td>
      </tr>
     
      
      
      <tr>
        <td></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Thanks you for shopping with us. Your Order Details are as below"</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>Order No:  {{$order_id}}</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>
          <table width="95%" cellpading="5" cellspacing="5" bgcolor="#f7f4f4">
            <tr bgcolor="#cccccc">
              <td>Product Name </td>
              <td>Product Color</td>
              <td>Product Code</td>
              <td>Product Unit Price</td>
              <td>Quantity</td>
              <td>Total Price</td>
            </tr>
            @foreach($productDetails['orders'] as $product)
            <tr>
              <td>{{$product['product_name']}}</td>
              <td>{{$product['color']}}</td>
              <td>{{$product['color_code']}}</td>
              <td>{{$gs->currency}}&nbsp;&nbsp;{{$product['selling_price']}}</td>
            
              <td>{{$product['quantity']}}</td>
              
              <td>{{$gs->currency}}&nbsp;&nbsp;{{$product['selling_price'] *$product['quantity']}} </td>
          
            </tr>

            @endforeach
        
            <tr>
              <td colspan="4" align="right">Subtotal:</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['subtotal']}}</td>
            </tr>
           
          
            <tr>
              <td colspan="4" align="right">Vat({{$gs->vat}}%):</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['vat']}}</td>
            </tr>
           
            <tr>
              <td colspan="4" align="right">Shipping Charge</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['shipping_charge']}}</td>
            </tr>
          
            
            <tr>
              <td colspan="4" align="right">Grand Total</td>
              <td>{{$gs->currency}}&nbsp;&nbsp; {{$productDetails['paybale_total']}}  </td>
            </tr>
          </table>
        </td>
      </tr>
            <tr>
              <td>
                <table width="100%">
                <tr>
                  <td width="50%">
                    <table>
                      <tr>
                        <td><strong>Bill TO :-</strong></td>
                      </tr>
                        <tr>
                          <td>{{$userDetails['name']}}</td>
                        </tr>
                        <tr>
                          <td>{{$userDetails['address']}}</td>
                        </tr>
                     
                       
                        <tr>
                          <td>{{$userDetails['phone']}}</td>
                        </tr>

                    </table>
                  </td>

                  <td width="50%">
                    <table>
                      <tr>
                        <td><strong>Shipping TO :-</strong></td>
                      </tr>
                      <tr>
                          <td>{{$userDetails['name']}}</td>
                        </tr>
                        <tr>
                          <td>{{$userDetails['address']}}</td>
                        </tr>
                       
                       
                        <tr>
                          <td>{{$userDetails['phone']}}</td>
                        </tr>

                    </table>
                  </td>
                </tr>
                </table>
              </td>
            </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>For any equiries, you can contact us at <a href="mailto:{{$gs->email}}">{{$gs->email}}</a>
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Regards &nbsp;&nbsp; Team-{{$gs->website_name}}</td>
    </tr>

    

      
    </table>
    

    
    </table>
  </body>
</html>
