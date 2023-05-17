<?php 
	function insertDataShow(string $title, string $description, int $type_id, int $running_time, string $language, string $subtitle, string $img, string  $trailer, int $created_id) : bool
    {
           global $connection;
               $statement=$connection->prepare('insert into shows (title, description, type_id, running_time, language, subtitle, img, trailer, created_id )
               values (:title, :description, :type_id, :running_time, :language, :subtitle, :image, :trailer, :created_id )');
               $statement->execute([
                   ':title' => $title,
                   ':description' => $description,
                   ':type_id' => $type_id,
                   ':running_time' => $running_time,
                   ':language' => $language,
                   ':subtitle' => $subtitle,
                   ':image' => $img,
                   ':trailer' => $trailer,
                   ':created_id' => $created_id,
               ]);
            return $statement->rowCount() > 0;
    }

    function insertDateTime(string $date, string $time) : bool
        {
            global $connection;
                $statement=$connection->prepare('insert into date_time (date, time) values ( :date, :time)');
                $statement->execute([
                    ':date' => $date,
                    ':time' => $time,
                ]);
                return $statement->rowCount() > 0;
        }


    function insertShowDateTime(int $show_id, int $datetime_id) : bool
        {
            global $connection;
                $statement=$connection->prepare('insert into show_datetime (show_id, datetime_id) values ( :showid, :datetimeid)');
                $statement->execute([
                    ':showid' => $show_id,
                    ':datetimeid' => $datetime_id,

                ]);
                return $statement->rowCount() > 0;

        }
        
    function insertDetailData(int $show_id, int $venue_id) : bool
        {
            global $connection;
                $statement=$connection->prepare('insert into detail (show_id, venue_id) values ( :showid, :venueid)');
                $statement->execute([
                    ':showid' => $show_id,
                    ':venueid' => $venue_id,

                ]);
                return $statement->rowCount() > 0;

        }

    function getDateTimeData() : array
    {
        global $connection;
        $statement = $connection->prepare("select * from date_time");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDataVenue() : array
    {
        global $connection;
        $statement = $connection->prepare("select * from venues");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }





