<?php
require_once 'helpFunction.php'; 

class Article{
    
    
   protected $title ;
   protected $article_contecnt ;
    

   
   function getArticleObject ($id) {
    //$sqlhelp = new sqlHelper;
  //  return $articles;
 try {
    $articles= R::getAll( 'select * from articles where id= "'.$id.'" ' );
    
    return $articles;
} catch (RedBeanPHP\RedException\SQL $e) {
    echo $e->getMessage();

       
   
   }
   
   
}
function process_article() {
 
    $articlesList=null;
    // title
    // content_article
    // user_id_hidden
    // case_to_be
    
   // htmlspecialchars($_POST["title"]);
   // htmlspecialchars($_POST["content_article"]);
   // htmlspecialchars($_POST["user_id_hidden"]); // just in case the hacker change the paramter 
   // htmlspecialchars($_POST["case_to_be"]);// just in case the hacker change the paramter 
    
    if( htmlspecialchars($_POST["case_to_be"])=="1"){
          $sqlhelp = new sqlHelper;
        // save article
        /*
         title
         user_id
         article_content
         the_date
         */
          $newArticle= R::dispense('articles');

              //rb-mysql.php
    //  $what=$_POST['what'];
    // date("l jS \of F Y h:i:s A")  
         $newArticle->title=htmlspecialchars($_POST["title"]);
         $newArticle->article_content=htmlspecialchars($_POST["content_article"]);
         $newArticle->user_id=htmlspecialchars($_POST["user_id_hidden"]);
          $newArticle->the_date=htmlspecialchars($_POST["user_id_hidden"]);
          // how to mange updateds 
        // $newArticle->the_date=date("l jS \of F Y h:i:s A")  ;
         R::store($newArticle); // store is done 
        
    }else if(htmlspecialchars($_POST["case_to_be"])=="2")
    {
        $help=new helpFunction;
        // update article
        // update_article($title,$cont,$acId) 
        
        $help->update_article(htmlspecialchars(htmlspecialchars($_POST["title"])),htmlspecialchars($_POST["content_article"]),htmlspecialchars($_POST["id"])) ;
        
    }else if(htmlspecialchars($_POST["case_to_be"])=="3")
    {
        // view user specific article
       return $articlesList=dissplay_art_for_user(htmlspecialchars($_POST["user_id_hidden"]));
        // acess point to be use in dissplay result articles List objects 
    }else if(htmlspecialchars($_POST["case_to_be"])=="4")
    {
        // delete  article dissplay_art_for_all()
       return   $articlesList=  dissplay_art_for_all();
        
    }else if(htmlspecialchars($_POST["case_to_be"])=="5")
    {
    
  delete_article($article_id);
    } else {
        // nothing to use with this class  only calling a methods getArticleObject but not directly
    }
}


}
  $ar  = new Article;
  
 // $ar->getArticleObject(1);

 $ar->process_article();


        






?>