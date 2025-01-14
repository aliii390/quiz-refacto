
<?php 


class QuizzMapper{
    public function MapperToObject(array $data){
        return new Choix(
                $data['id'],
                $data['name'],
                $data["img_path"],
                $data['img_alt']
                
        );
    }
}