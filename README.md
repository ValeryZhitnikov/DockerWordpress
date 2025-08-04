# Docker WordPress Project

WordPress проект с Docker и системой сборки webpack.

## Структура проекта

```
DockerWordpress/
├── theme/                    # WordPress тема
│   ├── src/                  # Исходные файлы
│   │   ├── styles/           # SCSS стили
│   │   ├── scripts/          # JavaScript файлы
│   │   └── fonts/            # Шрифты
│   ├── assets/               # Скомпилированные файлы
│   ├── templates/            # Шаблоны темы
│   ├── inc/                  # PHP файлы темы
│   └── functions.php         # Основной файл темы
├── package.json              # Зависимости и скрипты
├── webpack.config.js         # Конфигурация webpack
├── docker-compose.yml        # Docker конфигурация
└── Dockerfile               # Docker образ
```

## Установка и сборка

### 1. Установка зависимостей

```bash
npm install
```

### 2. Сборка темы

**Для продакшена:**
```bash
npm run build
```

**Для разработки (с отслеживанием изменений):**
```bash
npm run dev
```

**Только сборка темы:**
```bash
npm run theme:build
```

**Разработка темы (с отслеживанием изменений):**
```bash
npm run theme:dev
```



### 3. Запуск Docker

```bash
docker-compose up -d
```

## Доступные скрипты

- `npm run build` - Сборка для продакшена
- `npm run dev` - Разработка с отслеживанием изменений
- `npm run start` - Запуск dev сервера
- `npm run theme:build` - Сборка только темы
- `npm run theme:dev` - Разработка темы


## Шрифты

Проект использует шрифт **Panton** с различными весами:
- Thin (100)
- Light (300)
- Regular (400)
- SemiBold (600)
- Bold (700)

Файлы шрифтов находятся в `theme/src/fonts/Panton/`.

## Стили

Стили написаны на SCSS с использованием модульной архитектуры:
- `reset.scss` - Сброс стилей браузера
- `variables.scss` - Переменные (цвета, размеры, отступы)
- `fonts.scss` - Подключение шрифтов и типографика
- `global.scss` - Основные стили темы

## Разработка

### Разработка:
1. Запустите `npm run dev` для отслеживания изменений
2. Редактируйте файлы в `src/`
3. Webpack автоматически пересоберет файлы в `theme/assets/`
4. Обновите страницу в браузере

## Docker

Проект включает Docker конфигурацию для локальной разработки WordPress с MySQL и phpMyAdmin.
