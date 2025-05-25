import Category from '../model/Category.js';
import News from '../model/News.js';
import CategoryNews from '../model/CategoryNews.js';

function applyAssociations() {
    Category.belongsToMany(News, {
        through: CategoryNews,
        foreignKey: 'categoryId',
        otherKey: 'newsId',
    });

    News.belongsToMany(Category, {
        through: CategoryNews,
        foreignKey: 'newsId',
        otherKey: 'categoryId',
    });
}

export default applyAssociations;
