<?php
    class Article{
        private $title;
        private $date;
        private $image_url;
        private $content;
        const DIV_OPEN = "<div>";
        const DIV_CLOSE = "</div>";
        const H_OPEN = "<h3>";
        const H_CLOSE = "</h3>";
        const P_OPEN = "<p>";
        const P_CLOSE = "</p>";
        private $article_id = "article"; 
        function setTitle($title){
            $this->title = $title;
        }
        function getTitle(){
            
        }

        function setDate($date){
            $this->date = $date;
        }
        function getDate(){

        }

        function setImage_url($url){
            $this->image_url = $url;
        }

        function getImage_url(){

        }

        function setContent($content){
            $this->content = $content;
        }

        function getContent(){

        }

        function setArticle_id($id){
            $this->article_id = $id;
        }
        function getArticle_id(){
           
        }
        function MakeArticle(){
            $div_open_tag = "<div class='article'"."id='".$this->article_id."'".">";
            $div_open_tag_cont =  "<div class='article_content'>";
            $div_close_tag = "</div>";
            $h3_title_article = SELF::H_OPEN.$this->title.SELF::H_CLOSE;
            $article_date = SELF::DIV_OPEN.SELF::P_OPEN.$this->date.SELF::P_CLOSE.SELF::DIV_CLOSE;
            $article_img = SELF::DIV_OPEN."<img src='".$this->image_url."'>".SELF::DIV_CLOSE;
            $article_content = $div_open_tag_cont.SELF::P_OPEN.$this->content.SELF::P_CLOSE.SELF::DIV_CLOSE;
            $output=$div_open_tag.$h3_title_article.$article_date.$article_img.$article_content.$div_close_tag;
            return $output;
        }

    }
?>