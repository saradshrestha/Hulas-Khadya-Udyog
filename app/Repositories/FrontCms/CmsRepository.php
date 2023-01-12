<?php

namespace App\Repositories\FrontCms;


use App\Model\GobalPost;
use App\Model\GobalPostMeta;
use App\Model\PostType;

class CmsRepository implements CmsInterface
{
    public function getGlobalPostTypeBySlug($slug)
    {
        return PostType::where('slug', $slug)->first();
    }

    public function getGlobalPostByPostType($postType)
    {
        $globalPosts = GobalPost::where('post_type', $postType->id)
            ->where('status', 'Active')
            ->orderBy('position', 'ASC')
            ->get();
        return $globalPosts;
    }

    public function getGlobalPostByID($id, $limit = null,$search=null,$filter=null)
    {
       
        $globalPosts = GobalPost::where('post_type', $id)
            ->where('status', 'Active')
            ->orderBy('position', 'ASC')->with(['seoable', 'postMetas','author']);
        
        if ($search != null) {
            $globalPosts = $globalPosts->where('title','LIKE','%'.$search.'%');
        }
        
        if ($filter != null) {
            // dd($filter);
            if($filter != "All"){
                $globalPosts = $globalPosts->whereHas('postMetas',function($q) use ($filter){
                    $q->where('key','product-id')->where('value', 'a:1:{i:1;s:1:"'.$filter.'";}');
                });
            }
           

            // dd($globalPosts->get());
        }

        if ($limit != null && $limit > 0) {
            $globalPosts = $globalPosts->take($limit);
        }

        $globalPosts = $globalPosts->get();
        return $globalPosts;
    }

    public function getGlobalPostSingleById($id)
    {
        $globalPosts = GobalPost::where('id', $id)->first();
        return $globalPosts;
    }

    public function getGlobalPostMetaByKey($post, $key)
    {

        if ($post->postMetas) {
            $meta =  $post->postMetas->where('gobal_post_id', $post->id)->where('key', $key)->first();
            if ($meta) {
                return $meta->value;
            }
        }

        return null;
    }




    public function getGlobalPostMultipleByIds($ids = [])
    {
        return GobalPost::whereIn('id', $ids)->where('status', 'Active')->get();
    }


    public function getgobalPostBySlug($slug)
    {
        return GobalPost::where('slug', $slug)->with(['seoable', 'postMetas'])->first();
    }


    public function getGlobalPostByIdWithMetaDatasVideo($id){
        $globalPosts = GobalPost::where('post_type', $id)
            ->where('status', 'Active')
            ->orderBy('position', 'ASC')
            ->whereHas('postMetas', function($q){
                $q->where('key','video-link');
            })->with(['seoable', 'postMetas','author'])->get();
        return $globalPosts;
    
    }

}
