# novelist-narrow

某のクローン。

だるかったりきつそうな機能の実装をサボったり、

これ欲しいって思った機能を入れたりする予定。

## メモ

### テーブル設計

たたき台(2020-08-07 21:52:18現在)。

```
create table writers(
	user_id integer,
	foreign key(user_id) references users(id)
)

create table readers(
	user_id integer,
	foreign key(user_id) references users(id)
)

create table novels(
	title varchar(300),
	description text,
	writer_id integer,
	foreign key(writer_id) references writers(id)
)

create table posts(
	title varchar(300),
	body text,
	novel_id integer,
	foreign key(novel_id) references novels(id)
)

create table sections(
	title varchar(300),
)

create table post_sections(
	post_id integer,
	section_id integer,
	primary key(post_id, section_id),
	foreign key(post_id) references posts(id),
	foreign key(section_id) references sections(id)
)

create table tags(
	name varchar(100)
)

create table post_tags(
	post_id integer,
	tag_id integer,
	primary key(tag_id, novel_id),
	foreign key(post_id) references posts(id),
	foreign key(tag_id) references tags(id)
)

create table bookmarks(
	reader_id integer,
	post_id integer,
	position integer,
	enable boolean,
	primary key(reader_id, post_id),
	foreign key(reader_id) references readers(id),
	foreign key(post_id) references posts(id)
)

create table accesslogs(
	post_id integer,
	reader_id integer,
	ip_address varchar(16),
	user_agent_info var_char(150),
	primary key(post_id, reader_id),
	foreign key(post_id) references posts(id),
	foreign key(reader_id) references readers(id)
)

create table papers(
	title varchar(200),
	description text
)

create table post_substring(
	post_id integer,
	begin integer,
	end integer
)

create table post_papers(
	post_id integer,
	paper_id integer,
	position integer,
	post_substring_id integer,
	primary key(paper_id, post_id, post_substring_id),
	foreign key(post_id) references posts(id),
	foreign key(paper_id) references papers(id),
	foreign key(post_substring_id) references post_substrings(id)
)

create table novel_papers(
	paper_id integer,
	novel_id integer,
	primary key(paper_id, novel_id),
	foreign key(paper_id) references papers(id),
	foreign key(novel_id) references novels(id)
)

```
