
    
    	<div class="typography">
        
            <h2>$Title</h2>
            $Content
            $Form
           
           <div id="galleryArea">
           <% loop getGalleryImages %>
           <div class="galleryItem">
           		<% control $SetRatioSize(800,600) %>
                <a class="galleryItemLink" href="$URL" rel="$Width"><% end_control %>
                <div class="imgTitle">$Title</div>
                <div class="imgCaption">$Caption</div>
            	$CroppedImage(150,150)
                </a>
           </div>
           <% end_loop %>
           	<div class="clear"></div>
            
            <div id="GalleryPageShade" style="display: none;"></div>
            <div id="GalleryPopup" style="display: none;">
                <div id="GalleryPopupInner">
                    <p class="PopupClose">Close</p>
                    <div id="GalleryLoadArea">
                    </div>
                </div>	
            </div>
    
    
			</div>

		</div>


