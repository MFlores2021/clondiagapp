<?php function imagecreatefromfile( $filename ) {		if (!file_exists($filename)) {			throw new InvalidArgumentException('File "'.$filename.'" not found.');		}		switch ( strtolower( pathinfo( $filename, PATHINFO_EXTENSION ))) {			case 'jpeg':				return $img_r=imagecreatefromjpeg($filename);			break;			case 'jpg':							return $img_r=imagecreatefromjpeg($filename);			break;			case 'png':							return $img_r=imagecreatefrompng($filename);			break;			case 'gif':				return $img_r=imagecreatefromgif($filename);			break;			default:				throw new InvalidArgumentException('File "'.$filename.'" is not valid jpg, png or gif image.');			break;			}		}  		?>