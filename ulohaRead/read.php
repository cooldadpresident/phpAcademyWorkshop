<?
interface IReadable
{
    public function getActualPage(): int;
    public function getMaxPage(): int;
}

class FavoriteBook implements IReadable
{
    private $currentPage;
    private $maxPage;

    public function __construct(int $currentPage, int $maxPage)
    {
        $this->currentPage = $currentPage;
        $this->maxPage = $maxPage;
    }

    public function getActualPage(): int
    {
        return $this->currentPage;
    }

    public function getMaxPage(): int
    {
        return $this->maxPage;
    }

    public function getPage(): int
    {
        return $this->currentPage;
    }
}
?>