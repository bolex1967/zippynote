<?php

namespace App\Entity;

/**
 *  Класс  инкапсулирующий  комбинацию  топик-узел (используется  для поиска)
 * @table=topicnodeview
 * @view=topicnodeview
 * @keyfield=tn_id
 */
class TopicNode extends \ZCL\DB\Entity
{

    protected function init()
    {
        $this->tn_id = 0;
    }

    /**
    * поиск по  тексту
    * 
    * @param mixed $text
    */
    public static function searchByText($text)
    {

        $text = Topic::qstr('%' . $text . '%');
        $sql = "  select * from topicnodeview   where (title like {$text}  or content like {$text} ) and  user_id=" . \App\System::getUser()->user_id;

        $list = TopicNode::findBySql($sql);

        return $list;
    }

    /**
    * поиск по  тегу
    * 
    * @param mixed $tag
    */
    public static function searchByTag($tag)
    {

        $sql = "  select * from topicnodeview   where topic_id in (select topic_id from tags where tagvalue  = " . Topic::qstr($tag) . " ) and  user_id=" . \App\System::getUser()->user_id;

        $list = TopicNode::findBySql($sql);

        return $list;
    }
    
   // поиск избранных 
   public static function searchFav()
    {

            $sql = "  select * from topicnodeview   where topic_id in (select topic_id from topics where favorites  = 1  ) and  user_id=" . \App\System::getUser()->user_id;

        $list = TopicNode::findBySql($sql);

        return $list;
    }

    /**
    * цепочка  названий ущлов до  корня
    * 
    */
    public function nodes()
    {

        $node = Node::load($this->node_id);
        $list = $node->getParents();
        $list = array_reverse($list);

        $path = implode(" > ", $list);
        return $path;
    }

}
