<?php

namespace App\Factory;

use App\Entity\Eenseignant;
use App\Repository\EenseignantRepository;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Eenseignant>
 *
 * @method        Eenseignant|Proxy create(array|callable $attributes = [])
 * @method static Eenseignant|Proxy createOne(array $attributes = [])
 * @method static Eenseignant|Proxy find(object|array|mixed $criteria)
 * @method static Eenseignant|Proxy findOrCreate(array $attributes)
 * @method static Eenseignant|Proxy first(string $sortedField = 'id')
 * @method static Eenseignant|Proxy last(string $sortedField = 'id')
 * @method static Eenseignant|Proxy random(array $attributes = [])
 * @method static Eenseignant|Proxy randomOrCreate(array $attributes = [])
 * @method static EenseignantRepository|RepositoryProxy repository()
 * @method static Eenseignant[]|Proxy[] all()
 * @method static Eenseignant[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Eenseignant[]|Proxy[] createSequence(iterable|callable $sequence)
 * @method static Eenseignant[]|Proxy[] findBy(array $attributes)
 * @method static Eenseignant[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static Eenseignant[]|Proxy[] randomSet(int $number, array $attributes = [])
 */
final class EenseignantFactory extends ModelFactory
{
    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services
     *
     * @todo inject services if required
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories
     *
     * @todo add your default values here
     */
    protected function getDefaults(): array
    {
        return [
            'cin' => self::faker()->realText(10),
            'email' => self::faker()->email(255),
            'nom' => self::faker()->lastName(255),
            'prenom' => self::faker()->firstName(255),
        ];
    }

    /**
     * @see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
     */
    protected function initialize(): self
    {
        return $this
            // ->afterInstantiate(function(Eenseignant $eenseignant): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Eenseignant::class;
    }
}
